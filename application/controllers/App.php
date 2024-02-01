<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends App_Controller
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
	function newsletter()
	{
		if ($this->input->method() == 'post') {
			$data = $this->security->xss_clean($this->input->post());
			// check email is registered
			$exist = $this->db->where('email', $data['email'])->get('newsletter')->row_array();
			if (!empty($exist)) {
				$response = array(
					'status' => 'fail',
					'class' => 'danger',
					'message' => 'Thank You! You are already a newsletter subscriber.'
				);
			} else {
				$data['created_on'] = date('Y-m-d');
				$status = $this->db->insert('newsletter', $data);
				if ($status) {
					$response = array(
						'status' => 'success',
						'class' => 'success',
						'message' => 'Thank You! News Letter Subscribed. You will receive latest in sports recruitment, player showcases, and exciting opportunities and news from our platform.'
					);
				} else {
					$response = array(
						'status' => 'fail',
						'class' => 'danger',
						'message' => 'Failed To Subscribe to Newsletter'
					);
				}
			}
		} else {
			$response = array(
				'status' => 'fail',
				'class' => 'danger',
				'message' => 'Invalid Method Type'
			);
		}
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
		return;
	}
}
