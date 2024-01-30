<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setup extends App_Controller
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
	public function set_site_language($language = 'en')
	{
		if ($language != null) {
			$domain = $_SERVER['HTTP_HOST'] === 'localhost' ? $_SERVER['HTTP_HOST'] : APP_URL_COOKIE;
			$secure = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? true : false;
			// set site language
			$cookie = array(
				'name'   => '_applang',
				'value'  => $language,
				'expire' => '0',
				'domain' => $domain,
				'path'   => '/',
				'secure' => $secure
			);
			$this->input->set_cookie($cookie);
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
