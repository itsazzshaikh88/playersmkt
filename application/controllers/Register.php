<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends App_Controller
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
	public function player($action = null, $player_id = null)
	{

		if ($this->input->method() == 'post') {
			$data = $this->security->xss_clean($this->input->post());
			// Process $data as needed
			$response =  $this->registration_model->add_player($data);
			// Send a response back to the client
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($response));
			return;
		}
		$data['player_detail'] = [];
		if ($this->uri->total_segments() == 4 && $action == 'account-created') {
			$id = $this->input->get('account-id');
			$token = $this->input->get('account-token');
			$data['player_detail'] = $this->registration_model->fetchPlayerDetail($id, $token);
		}

		// App Languages
		$data['current_language'] = $this->site_lang;
		$data['supported_languages'] = $this->supported_languages;
		$data['sports'] = $this->app_model->fetchSports();
		// Load View and Language Files
		$this->lang->load('login', $this->site_lang);
		// Load View Template
		$view_name = 'register/player';
		$data['view_path'] = "pages/$view_name";
		$data['css_files'] = ['assets/css/custom/login.css'];
		$data['scripts'] = ['assets/js/custom/player-register.js'];
		$this->load->view('template', $data);
	}
}
