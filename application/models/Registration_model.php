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
}
