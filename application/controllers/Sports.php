<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sports extends App_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function Categories()
    {
        // App Languages
        $data['current_language'] = $this->site_lang;
        $data['supported_languages'] = $this->supported_languages;
        // Load View and Language Files
        $this->lang->load('home', $this->site_lang);
        // Load View Template
        $view_name = 'categories';
        $data['view_path'] = "pages/$view_name";
        $data['scripts'] = ['assets/js/custom/home.js'];
        $data['app_title'] = APP_NAME . " - Your Gateway to Sports Talent";

        $this->load->view('template', $data);
    }


    public function Cricket()
    {
        // App Languages
        $data['current_language'] = $this->site_lang;
        $data['supported_languages'] = $this->supported_languages;
        // Load View and Language Files
        $this->lang->load('home', $this->site_lang);
        // Load View Template
        $view_name = 'categories/cricket';
        $data['view_path'] = "pages/$view_name";
        $data['scripts'] = ['assets/js/custom/home.js'];
        $data['app_title'] = APP_NAME . " - Your Gateway to Sports Talent";

        $this->load->view('template', $data);
    }


    public function Football()
    {
        // App Languages
        $data['current_language'] = $this->site_lang;
        $data['supported_languages'] = $this->supported_languages;
        // Load View and Language Files
        $this->lang->load('home', $this->site_lang);
        // Load View Template
        $view_name = 'categories/football';
        $data['view_path'] = "pages/$view_name";
        $data['scripts'] = ['assets/js/custom/home.js'];
        $data['app_title'] = APP_NAME . " - Your Gateway to Sports Talent";

        $this->load->view('template', $data);
    }

    public function Basketball()
    {
        // App Languages
        $data['current_language'] = $this->site_lang;
        $data['supported_languages'] = $this->supported_languages;
        $this->lang->load('home', $this->site_lang);
        // Load View Template
        $view_name = 'categories/basketball';
        $data['view_path'] = "pages/$view_name";
        $data['scripts'] = ['assets/js/custom/home.js'];
        $data['app_title'] = APP_NAME . " - Your Gateway to Sports Talent";

        $this->load->view('template', $data);
    }

    public function Hockey()
    {
        // App Languages
        $data['current_language'] = $this->site_lang;
        $data['supported_languages'] = $this->supported_languages;
        // Load View and Language Files
        $this->lang->load('home', $this->site_lang);
        // Load View Template
        $view_name = 'categories/hockey';
        $data['view_path'] = "pages/$view_name";
        $data['scripts'] = ['assets/js/custom/home.js'];
        $data['app_title'] = APP_NAME . " - Your Gateway to Sports Talent";

        $this->load->view('template', $data);
    }

    public function Tennis()
    {
        // App Languages
        $data['current_language'] = $this->site_lang;
        $data['supported_languages'] = $this->supported_languages;
        // Load View and Language Files
        $this->lang->load('home', $this->site_lang);
        // Load View Template
        $view_name = 'categories/tennis';
        $data['view_path'] = "pages/$view_name";
        $data['scripts'] = ['assets/js/custom/home.js'];
        $data['app_title'] = APP_NAME . " - Your Gateway to Sports Talent";

        $this->load->view('template', $data);
    }


    public function Badminton()
    {
        // App Languages
        $data['current_language'] = $this->site_lang;
        $data['supported_languages'] = $this->supported_languages;
        // Load View and Language Files
        $this->lang->load('home', $this->site_lang);
        // Load View Template
        $view_name = 'categories/badmenton';
        $data['view_path'] = "pages/$view_name";
        $data['scripts'] = ['assets/js/custom/home.js'];
        $data['app_title'] = APP_NAME . " - Your Gateway to Sports Talent";

        $this->load->view('template', $data);
    }

}
