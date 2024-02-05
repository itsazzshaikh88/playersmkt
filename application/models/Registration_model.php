<?php

class Registration_model extends CI_Model
{
	function add_player($data)
	{
		$exist = $this->db->where('email', $data['email'])->get('players')->row_array();
		if ($exist != []) {
			return array(
				'status_text' => 'fail',
				'message' => "Email Adress <span class='font-weight-bold'>$data[email]</span> is already registered on Playersmkt.",
			);
		}
		// unset data
		unset($data['con_password']);
		// Modify Data
		$data['password'] = hash("sha256", $data['password']);
		$this->db->insert('players', $data);
		$insert_id = $this->db->insert_id();
		$today = date('Y-m-d');
		$daily_users = $this->db->where('registered_at', $today)->get('players')->result_array();
		$total_registered = (int)count($daily_users);
		$player_id = "PL" . date('ymd') . sprintf("%04d", $total_registered + 1);
		$token = hash("sha256", $player_id);
		$player_data['player_id'] = $player_id;
		$player_data['is_verified'] = 0;
		$player_data['registered_at'] = $today;
		$player_data['token'] = $token;
		$status = $this->db->where('id', $insert_id)->update('players', $player_data);
		if ($status) {
			return array(
				'status_text' => 'success',
				'id' => $insert_id,
				'token' => $token,
				'player_id' => $player_id,
				'message' => "Account Created Successfully",
				'url' => "register/player/account-created/$player_id?account-id=$insert_id&account-token=$token"
			);
		} else {
			return array(
				'status_text' => 'fail',
				'message' => "Failed to register your account on Playersmkt.",
			);
		}
	}

	function fetchPlayerDetail($id, $token = null)
	{
		$this->db->where('id', $id);
		if ($token != null)
			$this->db->where('token', $token);
		return $this->db->get('players')->row_array();
	}

	// Login Validations
	function player_login($data)
	{
		// unset remember me 
		unset($data['remember_me']);
		// Update Password
		$data['password'] = hash("sha256", $data['password']);
		// check user exist
		$user = $this->db->get_where('players', $data)->row_array();
		if (!empty($user)) {
			// account is valid
			$auth_token = hash("sha256", time());
			$status = $this->db->where('id', $user['id'])->update('players', ['auth_token' => $auth_token]);
			if ($status) {
				// set cookie for 3 hours
				$domain = $_SERVER['HTTP_HOST'] === 'localhost' ? $_SERVER['HTTP_HOST'] : APP_URL_COOKIE;
				$secure = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? true : false;
				// set site language
				$cookie = array(
					'name'   => '__plmkt_uat', // Playermkt Authentication token
					'value'  => $auth_token,
					'expire' => time() + 3 * 60 * 60,
					'domain' => $domain,
					'path'   => '/',
					'secure' => $secure
				);
				$this->input->set_cookie($cookie);
				$response = array(
					'status' => 'success',
					'class' => 'success',
					'message' => 'Login Successfull.',
					'url' => PLAYER_APP_URL . "/feed/" . $user['player_id']
				);
			} else {
				$response = array(
					'status' => 'fail',
					'class' => 'danger',
					'message' => 'Failed to update login authentication token'
				);
			}
		} else {
			// invalid credentials
			$response = array(
				'status' => 'fail',
				'class' => 'danger',
				'message' => 'Invalid Login Credentials.'
			);
		}
		return $response;
	}

// ----------------------------------------------------------------------------------------------------------------------
	function add_club($data)
	{
		$exist = $this->db->where('email', $data['email'])->get('clubs')->row_array();
		if ($exist != []) {
			return array(
				'status_text' => 'fail',
				'message' => "Email Adress <span class='font-weight-bold'>$data[email]</span> is already registered on Playersmkt.",
			);
		}

		
		// unset data
		unset($data['con_password']);
		// Modify Data
		$data['password'] = hash("sha256", $data['password']);
		// echo "<pre>";
		// print_r($data);
		$this->db->insert('clubs', $data);
		$insert_id = $this->db->insert_id();
	
		$today = date('Y-m-d');
		$daily_users = $this->db->where('registered_at', $today)->get('clubs')->result_array();
		$total_registered = (int)count($daily_users);
		$club_id = "CL" . date('ymd') . sprintf("%04d", $total_registered + 1);
		$token = hash("sha256", $club_id);
		$club_data['club_id'] = $club_id;
		$club_data['is_verified'] = 0;
		$club_data['registered_at'] = $today;
		$club_data['token'] = $token;
		$status = $this->db->where('id', $insert_id)->update('clubs', $club_data);
		if ($status) {
			return array(
				'status_text' => 'success',
				'id' => $insert_id,
				'token' => $token,
				'club_id' => $club_id,
				'message' => "Account Created Successfully",
				'url' => "register/club/account-created/$club_id?account-id=$insert_id&account-token=$token"
			);
		} else {
			return array(
				'status_text' => 'fail',
				'message' => "Failed to register your account on Playersmkt.",
			);
		}
	}

	function fetchClubDetail($id, $token = null)
	{
		$this->db->where('id', $id);
		if ($token != null)
			$this->db->where('token', $token);
		return $this->db->get('clubs')->row_array();
	}

	function club_login($data)
	{
		// unset remember me 
		unset($data['remember_me']);
		// Update Password
		$data['password'] = hash("sha256", $data['password']);
		// check user exist
		$user = $this->db->get_where('clubs', $data)->row_array();
		if (!empty($user)) {
			// account is valid
			$auth_token = hash("sha256", time());
			$status = $this->db->where('id', $user['id'])->update('clubs', ['auth_token' => $auth_token]);
			if ($status) {
				// set cookie for 3 hours
				$domain = $_SERVER['HTTP_HOST'] === 'localhost' ? $_SERVER['HTTP_HOST'] : APP_URL_COOKIE;
				$secure = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? true : false;
				// set site language
				$cookie = array(
					'name'   => '__plmkt_uat', // Playermkt Authentication token
					'value'  => $auth_token,
					'expire' => time() + 3 * 60 * 60,
					'domain' => $domain,
					'path'   => '/',
					'secure' => $secure
				);
				$this->input->set_cookie($cookie);
				$response = array(
					'status' => 'success',
					'class' => 'success',
					'message' => 'Login Successfull.',
					'url' => PLAYER_APP_URL . "/feed/" . $user['club_id']
				);
			} else {
				$response = array(
					'status' => 'fail',
					'class' => 'danger',
					'message' => 'Failed to update login authentication token'
				);
			}
		} else {
			// invalid credentials
			$response = array(
				'status' => 'fail',
				'class' => 'danger',
				'message' => 'Invalid Login Credentials.'
			);
		}
		return $response;
	}

	function find_player()
	{

		$data =  $this->input->get();
		$data = array_filter($data,function($value){
			return $value !== null && $value !== '';
		});
		
		$sport_id = $this->input->get('sport_id');

		unset($data['rowcount']);
		unset($data['scroll']);
		unset($data['sport_id']);

		
	
			// Table names
			$table1 = 'players';
			$table2 = 'sports';
			$table3 = 'positions';
	 
			// Select fields from tables
			$this->db->select('players.sport_id,players.country,players.player_id,players.profile_photo,sports.sport_name,positions.position_name');
	 
			// Joins
			$this->db->from($table1);
			$this->db->join($table2, 'sports.sr_no = players.sport_id', 'left');
			$this->db->join($table3, 'positions.id = players.position_id', 'left');
	 
			// Dynamic conditions
			if (!empty($data)) {
				$this->db->where($data);
			}

			if($sport_id != '')
			$this->db->where('players.sport_id',$sport_id);

			// Limit and offset
			$this->db->limit(10);
	 
			// Execute the query
			$query = $this->db->get();
	 
			// Return the result
			return $query->result_array();
	
		
	}
}
