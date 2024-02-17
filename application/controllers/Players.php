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
		// if ($this->input->method() == 'post') {
		// 	$data = $this->security->xss_clean($this->input->post());
		// 	$response = $this->registration_model->player_login($data);
		// 	$this->output
		// 		->set_content_type('application/json')
		// 		->set_output(json_encode($response));
		// 	return;
		// }
		// In Players.php controller




		// App Languages
		$data['current_language'] = $this->site_lang;
		$data['supported_languages'] = $this->supported_languages;
		// Load View and Language Files
		$this->lang->load('login', $this->site_lang);
		// Load View Template
		$view_name = 'player/find';
		$data['view_path'] = "pages/$view_name";
		$data['sports'] = $this->app_model->fetchSports();
		$data['css_files'] = ['assets/css/custom/login.css'];
		$data['scripts'] = ['assets/js/custom/login.js'];
		$data['scripts'] = ['assets/js/list/player.js'];
		$this->load->view('template', $data);
	}

	function list()
	{
		$data['list'] = $this->Player_model->find_player();
		echo json_encode($data);
	}

	function fetch_players()
	{
		$row_count = $this->input->get('rowcount');
		$scroll = $this->input->get('scroll');

		$multi = 0;
		$offest = 0;

		if ($scroll == 1) {
			$offest = ++$row_count;
			$multi = $scroll == 1 ? $offest * 10 : 0;
		}

		$data['list'] = $this->Player_model->fetch_players($multi);
		$data['count'] = $offest;
		echo json_encode($data);
	}


	function position()
	{
		echo json_encode($this->Player_model->fetch_position());
	}

	function new()
	{
		$data['current_language'] = $this->site_lang;
		$data['supported_languages'] = $this->supported_languages;
		$this->lang->load('login', $this->site_lang);
		$view_name = 'player-list';
		$data['view_path'] = "pages/$view_name";
		$multi = 0;
		$offest = 0;
		$data['sports'] = $this->app_model->fetchSports();
		$data['Player_details'] = $this->Player_model->players();
		$data['css_files'] = ['assets/css/custom/login.css'];
		$data['scripts'] = ['assets/js/custom/login.js'];
		$data['scripts'] = ['assets/js/list/player.js'];
		$this->load->view('template', $data);
	}


	function profile($id, $type = 'details')
	{
		$data['current_language'] = $this->site_lang;
		$data['supported_languages'] = $this->supported_languages;
		$this->lang->load('profile', $this->site_lang);
		$data['Player_details'] = $this->Player_model->player($id);
		$data['Personal_info'] = $this->Player_model->players_info($id);
		if ($type == 'details')
			$view_name = 'player/profile';
		elseif ($type == 'posts')
			$view_name = 'player/post';
		elseif ($type == 'stats')
			$view_name = 'player/stats';
		else
			$view_name = 'player/profile';
		$data['view_path'] = "pages/$view_name";
		$data['css_files'] = ['assets/css/custom/login.css'];
		$data['scripts'] = ['assets/js/custom/login.js'];
		$this->load->view('template', $data);
	}
}
