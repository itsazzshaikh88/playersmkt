<?php

class Lists_model extends CI_Model 
{
	
	public function sports()
	{
		$sql = "SELECT sr_no,sport_name FROM sports";
		return $this->db->query($sql)->result_array();
	}

	function fetch_position()
	{
		$id = $this->input->get('id');
		$sql = "SELECT * FROM sport_positions WHERE sport_id=$id";
		return $this->db->query($sql)->result_array();
	}

	function fetch_players($multi)
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
			$table3 = 'sport_positions';
	 
			// Select fields from tables
			$this->db->select('players.sport_id,players.country,players.player_id,players.profile_photo,sports.sport_name,sport_positions.position_name');
	 
			// Joins
			$this->db->from($table1);
			$this->db->join($table2, 'sports.sr_no = players.sport_id', 'left');
			$this->db->join($table3, 'sport_positions.id = players.position_id', 'left');
	 
			// Dynamic conditions
			if (!empty($data)) {
				$this->db->where($data);
			}

			if($sport_id != '')
			$this->db->where('players.sport_id',$sport_id);

			// Limit and offset
			$this->db->limit(10, $multi);
	 
			// Execute the query
			$query = $this->db->get();
	 
			// Return the result
			return $query->result_array();
		
	}
	function fetch_clubs($multi)
	{
		$data =  $this->input->get();
		$data = array_filter($data,function($value){
			return $value !== null && $value !== '';
		});

		unset($data['rowcount']);
		unset($data['scroll']);
		
	
			// Table names
			$table1 = 'clubs';
			$table2 = 'sports';
	 
			// Select fields from tables
			$this->db->select('clubs.club_sports,clubs.club_country,clubs.club_id,clubs.profile_picture,sports.sport_name,clubs.club_city');
	 
			// Joins
			$this->db->from($table1);
			$this->db->join($table2, 'sports.sr_no = clubs.club_sports', 'left');
			// Dynamic conditions
			if (!empty($data)) {
				$this->db->where($data);
			}

	 
			// Limit and offset
			$this->db->limit(10, $multi);
	 
			// Execute the query
			$query = $this->db->get();
	 
			// Return the result
			return $query->result_array();
	}

	function SportFetch()
	{
		$sql = "SELECT * FROM sports
		LIMIT 12";
		return $this->db->query($sql)->result_array();
	}

	function PlayerFetch()
	{
		$sql = "SELECT
		p.id,
		p.first_name,
		p.last_name,
		p.profile_photo,
		s.sport_name
	FROM
		players p,
		sports s
	WHERE
		p.sport_id = s.sr_no;";
		return $this->db->query($sql)->result_array();
	}
	function ClubFetch()
	{
		$sql = "select * from clubs LIMIT 10";
		return $this->db->query($sql)->result_array();
	}
	function players()
	{
		$sql = "select * from players LIMIT 10";
		return $this->db->query($sql)->result_array();
	}
	// function players()
	// {
	// 	$sql = "select * from players ";
	// 	return $this->db->query($sql)->result_array();
	// }
}
