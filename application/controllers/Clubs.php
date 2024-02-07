<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Clubs extends App_Controller
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
        // Load View and Language Files
        $this->lang->load('login', $this->site_lang);
        // Load View Template

        $view_name = 'club/find';
        $data['view_path'] = "pages/$view_name";
        $data['sports'] = $this->app_model->fetchSports();
        $data['css_files'] = ['assets/css/custom/login.css'];
        $data['scripts'] = ['assets/js/custom/login.js'];
        $data['scripts'] = ['assets/js/list/club.js'];
		$data['sports'] = $this->Lists_model->sports();
        $this->load->view('template', $data);
    }

    function position()
	{
		echo json_encode($this->Lists_model->fetch_position());
	
	}


    function fetch_clubs()
	{
		$row_count = $this->input->get('rowcount');
		$scroll = $this->input->get('scroll');

		$multi = 0;
		$offest = 0;

		if($scroll == 1)
		{
			$offest = ++$row_count ;
			$multi = $scroll == 1 ? $offest * 10 : 0;
		}

		$data['list'] =$this->Lists_model->fetch_clubs($multi);
		$data['count'] = $offest;
		  echo json_encode($data);
	}


    function new(){
         // App Languages
         $data['current_language'] = $this->site_lang;
         $data['supported_languages'] = $this->supported_languages;
         // Load View and Language Files
         $this->lang->load('login', $this->site_lang);
         // Load View Template
 
         $view_name = 'club-list';
         $data['view_path'] = "pages/$view_name";
         $data['sports'] = $this->app_model->fetchSports();
         $data['css_files'] = ['assets/css/custom/login.css'];
         $data['club_details'] = $this->Lists_model->ClubFetch();
         $data['scripts'] = ['assets/js/custom/login.js'];
         $data['scripts'] = ['assets/js/list/club.js'];
         $data['sports'] = $this->Lists_model->sports();
         $this->load->view('template', $data);
    }

    
}
