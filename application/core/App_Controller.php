<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App_controller extends CI_Controller
{
	protected $site_lang;
	protected $supported_languages;
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
}
