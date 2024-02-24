<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sports extends App_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function categories($sport = null)
    {
        $sport_id = $this->input->get('sport-id');
        // App Languages
        $data['current_language'] = $this->site_lang;
        $data['supported_languages'] = $this->supported_languages;
        $data['sports'] = $this->Sports_model->fetch_sport();
        $data['players'] = $this->Sports_model->player_Fetch();
        $data['club_details'] = $this->Club_model->ClubFetch();
        // $data['topsports'] = $this->Sports_model->top_sport();
        // Load View and Language Files
        $this->lang->load('home', $this->site_lang);
        if ($sport == null){
            $view_name = 'sport-categories';
        }else{
            $view_name = "sport-category";
        }
        $data['view_path'] = "pages/categories/$view_name";
        $data['scripts'] = ['assets/js/custom/home.js'];
        $data['app_title'] = APP_NAME . " - Your Gateway to Sports Talent";
        $this->load->view('template', $data);
    }

    public function history()
    {
        // App Languages
        $data['current_language'] = $this->site_lang;
        $data['supported_languages'] = $this->supported_languages;
        // Load View and Language Files
        $this->lang->load('home', $this->site_lang);
        // Load View Template
        $view_name = 'categories/history';
        $data['view_path'] = "pages/$view_name";
        $data['scripts'] = ['assets/js/custom/home.js'];
        $data['app_title'] = APP_NAME . " - Your Gateway to Sports Talent";

        $this->load->view('template', $data);
    }
}
