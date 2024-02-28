<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App_controller extends CI_Controller
{
	public $site_lang;
	public $supported_languages;

	// User related information
	public $user;
	public $usertype;
	public $userid;
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
		$language = $this->site_language();
		$this->supported_languages = $this->app_supported_languages();
		$this->site_lang = $language;
		$this->isUserLoggedIn();
	}

	function site_language()
	{
		$cookie = $this->input->cookie('_applang', true);
		return $cookie ? $cookie : 'en';
	}

	function app_supported_languages()
	{
		return $this->app_model->app_supported_languages();
	}

	function app_mail($sender, $receiver, $subject, $message)
	{
		$to = $receiver['email'];
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: $sender[email]\r\n";

		if (mail($to, $subject, $message, $headers)) {
			return true;
		} else {
			return false;
		}
	}

	function isUserLoggedIn()
	{
		$auth_token = $this->input->cookie('__plmkt_uat', TRUE);
		if ($auth_token) {
			// Check the User TYpe and cookie is valid
			$auth_data = $this->db->where('token', $auth_token)->get('auth_tokens')->row_array();
			if (!empty($auth_data)) {
				// check is token expired
				if ($auth_data['is_expired'] === '0') {
					$usertype = $auth_data['user_type'];
					$userid = $auth_data['user_id'];
					// Fetch User details
					if ($usertype == 'P') {
						// fetch player details
						$this->user = $this->db->query("SELECT p.id, p.player_id, p.first_name, p.last_name, p.email, p.country, p.city, p.sport_id, p.position_id, 
						p.is_verified, p.verified_on, p.verification_source, upi.profile_image, upi.cover_image, upi.listing_image
						FROM players p
						LEFT JOIN user_profile_images upi ON p.id = upi.user_id AND upi.user_type = 'P'
						WHERE p.id = $userid")->row_array();
						$this->usertype = 'P';
						$this->userid = isset($this->user['id']) ? $this->user['id'] : null;
					} else if ($usertype == 'C') {
						// fetch club details
						$this->user = $this->db->query("SELECT c.id, c.club_id, c.managed_by, c.club_name, c.email, c.country, c.city, c.is_verified, c.is_subscribed, c.verified_on, c.subscribed_on, c.verification_source, c.registered_at, c.refered_by, c.refered_by_type, upi.profile_image, upi.cover_image, upi.listing_image
						FROM clubs c
						LEFT JOIN user_profile_images upi ON c.id = upi.user_id AND upi.user_type = 'C'
						WHERE c.id = $userid")->row_array();
						$this->usertype = 'C';
						$this->userid = isset($this->user['id']) ? $this->user['id'] : null;
					}
				}
			}
		} else {
			$this->user = [];
			$this->usertype = null;
			$this->userid = null;
		}
	}


	function club_is_subscriber()
	{
		$status = false;
		// cehck user is club and it is subsctribe
		if ($this->usertype == 'C')
			$status = $this->user['is_subscribed'] == "1" ? true : false;
		return $status;
	}
}
