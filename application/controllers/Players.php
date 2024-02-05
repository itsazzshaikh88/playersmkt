<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Players extends App_Controller
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

	public function find()
	{
		// App Languages
		$data['current_language'] = $this->site_lang;
		$data['supported_languages'] = $this->supported_languages;
        $data['Player_details'] = $this->lists_model->players();
		// Load View and Language Files
		$this->lang->load('home', $this->site_lang);
		// Load View Template
		$view_name = 'player-list';
		$data['view_path'] = "pages/$view_name";
		$data['scripts'] = ['assets/js/custom/home.js'];
		$data['app_title'] = APP_NAME . " - Your Gateway to Sports Talent";
	
		$this->load->view('template', $data);
	}

}
