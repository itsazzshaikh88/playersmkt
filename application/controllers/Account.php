<?php

use function PHPSTORM_META\type;

defined('BASEPATH') or exit('No direct script access allowed');

class Account extends App_Controller
{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
	}
	function forgot_password()
	{
		if ($this->input->method() == 'post') {
			$data = $this->security->xss_clean($this->input->post());
			$user = [];
			$username = '';
			$user_account_id = '';
			if ($data['user_type'] == 'PLAYER' || $data['user_type'] == 'CLUB') {
				// user details
				if ($data['user_type'] == 'PLAYER') {
					$user = $this->db->where('email', $data['email'])->get('players')->row_array();
					if (!empty($user)) {
						$username = "$user[first_name] $user[last_name]";
						$user_account_id = $user['player_id'];
					}
				} else if ($data['user_type'] == 'CLUB') {
					$user = $this->db->where('email', $data['email'])->get('clubs')->row_array();
					if (!empty($user)) {
						$username = "$user[first_name] $user[last_name]";
						$user_account_id = $user['club_id'];
					}
				}
				if (!empty($user)) {
					$user_id = $user['id'];
					$usertype = $data['user_type'];
					$token = $user['token'];
					$data['username'] = $username;
					$expiry_token = hash("sha256", time());
					$data['password_link'] = base_url() . "account/update-password/$user_account_id?reset-source=forgot-password&interface=web&account-type=$usertype&account-id=$user_id&account-token=$token&token=$expiry_token";
					$message = $this->load->view('email_templates/forgot-password', $data, TRUE);
					$sender['email'] = "account@playersmkt.com";
					$sender['name'] = "Acccount";
					$receiver['email'] = $user['email'];
					$receiver['name'] = $username;
					$subject = "Reset Account Password";
					if ($this->app_mail($sender, $receiver, $subject, $message)) {
						// Add Expiration Link token
						$expiry_data = array(
							'user_id' => $user_id,
							'user_type' => $usertype,
							'token' => $expiry_token,
							'is_expired' => 'no',
							'generated_on' => time()
						);
						$this->db->insert('pass_update_tokens', $expiry_data);
						$response = array(
							'status' => 'success',
							'class' => 'success',
							'message' => 'Password Reset Notification Sent',
							'url' => base_url() . "account/forgot-password/?action=sent&account-id=$user_id&account-token=$token&account-name=" . str_replace(" ", "-", $username)
						);
					} else {
						$response = array(
							'status' => 'fail',
							'class' => 'danger',
							'message' => 'Email Not Sent to Registered Email Address - Try again after some time'
						);
					}
				} else {
					// USer details not found
					$response = array(
						'status' => 'fail',
						'class' => 'danger',
						'message' => 'Invalid User Details - Cannot Update Password.'
					);
				}
			} else {
				$response = array(
					'status' => 'fail',
					'class' => 'danger',
					'message' => 'Invalid User Type - Cannot Update Password.'
				);
			}

			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($response));
			return;
		}
		// App Languages
		$data['current_language'] = $this->site_lang;
		$data['supported_languages'] = $this->supported_languages;
		// Load View and Language Files
		$this->lang->load('login', $this->site_lang);
		// Load View Template
		$data['email_sent'] = $this->input->get('action') == 'sent'  ? true : false;
		$view_name = 'account/forgot-password';
		$type = $this->input->get('action') == 'sent'  ? '' : $this->input->get('user-type');
		$data['user_type'] = $type;
		$data['view_path'] = "pages/$view_name";
		$data['css_files'] = ['assets/css/custom/login.css'];
		$data['scripts'] = ['assets/js/custom/forgot-password.js'];
		$this->load->view('template', $data);
	}


	function update_password($player_id = null)
	{
		if ($this->input->method() == 'post') {
			$user_detail = [];
			$username = '';
			$user_account_id = '';
			$data = $this->security->xss_clean($this->input->post());
			if ($data['user_type'] == 'PLAYER' || $data['user_type'] == 'CLUB') {
				// user details
				$userid = $data['id'];
				$user_detail = $this->registration_model->fetchPlayerDetail($userid);
				$table_name = strtolower($data['user_type']) . "s";
				$password = hash("sha256", $data['password']);
				$old_password = $user_detail['password'];
				$expiry_token = $data['expiry_token'];
				$status = $this->db->where('id', $userid)->update($table_name, ['password' => $password, 'password_updated_on' => date('Y-m-d')]);
				if ($status) {
					// Add Password Update History
					$password_history = array(
						'user_id' => $userid,
						'user_type' => strtolower($data['user_type']),
						'old_password' => $old_password,
						'new_password' => $password,
						'password_updated_on' => date('Y-m-d')
					);
					$this->db->insert('password_history', $password_history);
					// Make Update Password Link Expired 
					$this->db->where('token', $expiry_token)->update('pass_update_tokens', ['is_expired' => 'yes']);
					// Send an Notification Email
					if ($data['user_type'] == 'PLAYER')
						$username = "$user_detail[first_name] $user_detail[last_name]";
					else if ($data['user_type'] == 'CLUB')
						$username = "$user_detail[first_name] $user_detail[last_name]";

					$data['username'] = $username;
					$data['login_link'] = base_url() . "login/" . strtolower($data['user_type']);
					$message = $this->load->view('email_templates/password-updated', $data, TRUE);
					$sender['email'] = "account@playersmkt.com";
					$sender['name'] = "Acccount";
					$receiver['email'] = $user_detail['email'];
					$receiver['name'] = $username;
					$subject = "Account Password Updated Successfully";
					if ($this->app_mail($sender, $receiver, $subject, $message)) {
						$response = array(
							'status' => 'success',
							'class' => 'success',
							'message' => 'Password Updated Successfully',
							'url' => $data['login_link'],
							'content' => '<h3 class="text-green">Password Updated Successfully</h3>
											<h5 class="text-black mt-3">
												Dear User, Your account password has been updated successfully. Click on the link given below to login into your account.
											</h5>
											<a class="btn btn-primary w-100 btn-login mt-5" href="' . $data['login_link'] . '">Click to go to Login</a>'
						);
					} else {
						$response = array(
							'status' => 'fail',
							'class' => 'danger',
							'message' => 'Email Not Sent to Registered Email Address - Try again after some time'
						);
					}
				} else {
					// USer details not found
					$response = array(
						'status' => 'fail',
						'class' => 'danger',
						'message' => 'Failed to Update New Password - Try Again'
					);
				}
			} else {
				$response = array(
					'status' => 'fail',
					'class' => 'danger',
					'message' => 'Invalid User Type - Cannot Update Password.'
				);
			}

			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($response));
			return;
		}
		// App Languages
		$data['current_language'] = $this->site_lang;
		$data['supported_languages'] = $this->supported_languages;
		// Load View and Language Files
		$this->lang->load('login', $this->site_lang);
		// Load View Template
		$view_name = 'account/update-password';
		$data['user_type'] = strtolower($this->input->get('account-type'));
		$user_id = strtolower($this->input->get('account-id'));
		$token = $this->input->get('account-token');
		$expiry_token = $this->input->get('token');
		if ($expiry_token == '')
			$data['link_expired'] = true;
		else {
			$password_data = $this->db->where('token', $expiry_token)->get('pass_update_tokens')->row_array();
			if ($password_data == []) {
				$data['link_expired'] = true;
			} else {
				if ($password_data['is_expired'] == 'yes') {
					$data['link_expired'] = true;
				} else {
					$generated_at = $password_data['generated_on'];
					$current_time = time();
					// Calculate the time difference in seconds
					$timeDifferenceInSeconds = $current_time - $generated_at;
					// Check if the time difference is greater than 5 minutes (300 seconds)
					if ($timeDifferenceInSeconds > 300) {
						$this->db->where('token', $expiry_token)->update('pass_update_tokens', ['is_expired' => 'yes']);
						$data['link_expired'] = true;
					} else {
						$data['link_expired'] = false;
					}
				}
			}
		}
		$data['expiry_token'] = $expiry_token;
		$data['player_detail'] = $this->registration_model->fetchPlayerDetail($user_id, $token);
		$data['view_path'] = "pages/$view_name";
		$data['css_files'] = ['assets/css/custom/login.css'];
		$data['scripts'] = ['assets/js/custom/update-password.js'];
		$this->load->view('template', $data);
	}

	function follow()
	{
		// Notification if Success
		$response = $this->account_model->follow();

		echo json_encode($response);
	}
}
