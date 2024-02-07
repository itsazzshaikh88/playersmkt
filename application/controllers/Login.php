<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends App_Controller
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
	public function player()
	{
		if ($this->input->method() == 'post') {
			$data = $this->security->xss_clean($this->input->post());
			$response = $this->registration_model->player_login($data);
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
		$view_name = 'login/player';
		$data['view_path'] = "pages/$view_name";
		$data['css_files'] = ['assets/css/custom/login.css'];
		$data['scripts'] = ['assets/js/custom/login.js'];
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
