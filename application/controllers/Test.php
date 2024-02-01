<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends App_Controller
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

	function verify()
	{
		$data['username'] = "Shaikh Ab. Azim";
		$data['verification_link'] = base_url() . "verification/player/PL2401300001?verification-source=email&account-id=8&account-token=2d6dfecf2ae16d7f18c68fe022ab7e0d81eb591a87f7af02429a2e331b5ac2d9";
		$message = $this->load->view('email_templates/player-registration', $data, TRUE);
		$sender['email'] = "account@playersmkt.com";
		$sender['name'] = "Acccount";
		$receiver['email'] = "shaikh.azim@olivesofts.com";
		$receiver['name'] = "Shaikh Ab. Azim";
		$subject = "Welcome to PlayersMkt - Verify Your Account";
		if ($this->app_mail($sender, $receiver, $subject, $message)) {
			echo "Email Sent";
		} else {
			echo "Failed";
		}
	}
	function verified()
	{
		$data['verified'] = 1;
		$data['username'] = "Shaikh Ab. Azim";
		$this->load->view('email_templates/player-verified', $data);
		// $sender['email'] = "account@playersmkt.com";
		// $sender['name'] = "Acccount";
		// $receiver['email'] = "shaikh.azim@olivesofts.com";
		// $receiver['name'] = "Shaikh Ab. Azim";
		// $subject = "Welcome to PlayersMkt - Verify Your Account";
		// if ($this->app_mail($sender, $receiver, $subject, $message)) {
		// 	echo "Email Sent";
		// } else {
		// 	echo "Failed";
		// }
	}
	function forgot()
	{
		$data['username'] = "Shaikh Ab. Azim";
		$data['password_link'] = base_url() . "account/forgot-password/PL2401300001?reset-source=forgot-password&interface=web&account-id=8&account-token=2d6dfecf2ae16d7f18c68fe022ab7e0d81eb591a87f7af02429a2e331b5ac2d9";
		$message = $this->load->view('email_templates/forgot-password', $data, TRUE);
		$sender['email'] = "account@playersmkt.com";
		$sender['name'] = "Acccount";
		$receiver['email'] = "shaikh.azim@olivesofts.com";
		$receiver['name'] = "Shaikh Ab. Azim";
		$subject = "Welcome to PlayersMkt - Verify Your Account";
		if ($this->app_mail($sender, $receiver, $subject, $message)) {
			echo "Email Sent";
		} else {
			echo "Failed";
		}
	}
	function password_updated()
	{
		$data['username'] = "Shaikh Ab. Azim";
		$data['login_link'] = base_url() . "login/player";
		$this->load->view('email_templates/password-updated', $data);
		// $sender['email'] = "account@playersmkt.com";
		// $sender['name'] = "Acccount";
		// $receiver['email'] = "shaikh.azim@olivesofts.com";
		// $receiver['name'] = "Shaikh Ab. Azim";
		// $subject = "Welcome to PlayersMkt - Verify Your Account";
		// if ($this->app_mail($sender, $receiver, $subject, $message)) {
		// 	echo "Email Sent";
		// } else {
		// 	echo "Failed";
		// }
	}
}
