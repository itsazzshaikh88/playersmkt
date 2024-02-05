<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Verification extends App_Controller
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
	public function player($player_id = null)
	{
		$id = $this->input->get('account-id');
		$token = $this->input->get('account-token');
		$source = $this->input->get('verification-source');
		$data['link_expired'] = false;
		$data['is_verified'] = false;
		$data['already_verified'] = false;
		$data['player_detail'] = [];
		if ($id == '' || $token == '' || $source == '') {
			$data['link_expired'] = true;
		}
		if ($id != '') {
			$data['player_detail'] = $this->registration_model->fetchPlayerDetail($id, $token);
		}

		if ($data['player_detail'] != []) {
			if ($data['player_detail']['is_verified'] === '0') {
				//  Verify account and make 
				$verified['is_verified'] = 1;
				$verified['verified_on'] = date('Y-m-d');
				$verified['verification_source'] = $source;
				// Update Verification records
				$data['is_verified'] = $this->db->where('id', $id)->update('players', $verified);
				if ($data['is_verified']) {
					$player_name = $data['player_detail']['first_name'] . " " . $data['player_detail']['last_name'];
					// Send Email If Acccount Created Successfully
					$email_data['username'] = $player_name;
					$message = $this->load->view('email_templates/player-verified', $email_data, TRUE);
					$sender['email'] = "account@playersmkt.com";
					$sender['name'] = "Acccount";
					$receiver['email'] = $data['player_detail']['email'];
					$receiver['name'] = $player_name;
					$subject = "Account Verified Successfully !";
					$this->app_mail($sender, $receiver, $subject, $message);
				}
			} else if ($data['player_detail']['is_verified'] === '1') {
				$data['already_verified'] = true;
			}
		}
		// App Languages
		$data['current_language'] = $this->site_lang;
		$data['supported_languages'] = $this->supported_languages;
		// Load View and Language Files
		$this->lang->load('login', $this->site_lang);
		// Load View Template
		$view_name = 'verification/player';
		$data['view_path'] = "pages/$view_name";
		$this->load->view('template', $data);
	}


	public function club()
	{
		if ($this->input->method() == 'post') {
			$data = $this->security->xss_clean($this->input->post());
			$response = $this->registration_model->club_login($data);
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
		$view_name = 'login/club';
		$data['view_path'] = "pages/$view_name";
		$data['css_files'] = ['assets/css/custom/login.css'];
		$data['scripts'] = ['assets/js/custom/login.js'];
		$this->load->view('template', $data);
	}
}
