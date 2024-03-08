<?php

class Player_model extends CI_Model
{

	public function sports()
	{
		$sql = "SELECT sr_no,sport_name FROM sports";
		return $this->db->query($sql)->result_array();
	}

	// for player list
	function player_list()
	{
		$sql = "select p.player_id,s.sport_name,p.id
        from players p
        left join sports s on s.sr_no=p.sport_id
        LIMIT 10";
		return $this->db->query($sql)->result_array();
	}

	function fetch_position()
	{
		$id = $this->input->get('id');
		$sql = "SELECT * FROM sport_positions WHERE sport_id=$id";
		return $this->db->query($sql)->result_array();
	}

	function find_player()
	{

		$data =  $this->input->get();
		$data = array_filter($data, function ($value) {
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
		$this->db->select('players.id,players.sport_id,players.country,players.player_id,sports.sport_name,sport_positions.position_name,players.city');

		// Joins
		$this->db->from($table1);
		$this->db->join($table2, 'sports.sr_no = players.sport_id', 'left');
		$this->db->join($table3, 'sport_positions.id = players.position_id', 'left');

		// Dynamic conditions
		if (!empty($data)) {
			$this->db->where($data);
		}

		if ($sport_id != '')
			$this->db->where('players.sport_id', $sport_id);

		// Limit and offset
		$this->db->limit(10);

		// Execute the query
		$query = $this->db->get();

		// Return the result
		return $query->result_array();
	}

	function fetch_players($multi)
	{
		$data =  $this->input->get();
		$data = array_filter($data, function ($value) {
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

		if ($sport_id != '')
			$this->db->where('players.sport_id', $sport_id);

		// Limit and offset
		$this->db->limit(10, $multi);

		// Execute the query
		$query = $this->db->get();

		// Return the result
		return $query->result_array();
	}



	// function fetch_clubs($multi)
	// {
	// 	$data =  $this->input->get();
	// 	$data = array_filter($data,function($value){
	// 		return $value !== null && $value !== '';
	// 	});

	// 	unset($data['rowcount']);
	// 	unset($data['scroll']);


	// 		// Table names
	// 		$table1 = 'clubs';
	// 		$table2 = 'sports';

	// 		// Select fields from tables
	// 		$this->db->select('clubs.country,clubs.club_id,sports.sport_name,clubs.city');

	// 		// Joins
	// 		$this->db->from($table1);
	// 		$this->db->join($table2, 'sports.sr_no = clubs.club_name', 'left');
	// 		// Dynamic conditions
	// 		if (!empty($data)) {
	// 			$this->db->where($data);
	// 		}

	// 		// Execute the query
	// 		$query = $this->db->get();

	// 		// Return the result
	// 		return $query->result_array();
	// }

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
	
	function players()
	{
		$user_id = $this->userid;
		$user_type = $this->usertype;
		$sql = "select 
		p.id,p.player_id,p.country,u.gender,s.sport_name,u.date_of_birth,
		CASE 
			WHEN w.added_by = $user_id AND w.added_by_type = '$user_type' and p.id = w.user_id THEN 'added'
			ELSE null
		END as wishlist,
		
		CASE 
			 WHEN w.added_by = $user_id AND w.added_by_type = '$user_type' and p.id = w.user_id THEN w.id
			 ELSE 0
		 END as wishlist_id
		from players p 
		left join wishlist w on p.id=w.user_id
        left join sports s on p.sport_id=s.sr_no
        left join user_details u on p.id=u.user_id";

		return $this->db->query($sql)->result_array();
	}




	function player($id)
	{
		$sql = "select * from players where id = $id";
		return $this->db->query($sql)->row_array();
	}

	function players_info($id)
	{
		$sql = "select * from user_details where id = $id ";
		return $this->db->query($sql)->row_array();
	}
	function top_sports()
	{
		$sql = "SELECT *
	FROM sports
	ORDER BY 
		CASE
			WHEN sport_order IS NOT NULL THEN sport_order
			ELSE 999999 -- Assign a very high value to NULL orders
		END
	LIMIT 6;";
		return $this->db->query($sql)->result_array();
	}


	function followers($user, $user_type)
	{

		$sql = "SELECT
		c.player_id,
		c.country,
		c.id,
		f.id as f_id,
		f.followed_by_user_type,
		f.followed_by,
		IFNULL((f.status),'Follow') follow
		FROM players c
		LEFT JOIN followers f on f.following_to = c.id and
		f.followed_by = $user and f.following_user_type = 'P' and f.followed_by_user_type = '$user_type'
		where c.player_id NOT IN (1);";
		return $this->db->query($sql)->result_array();
	}


	// for player stats

	function player_stats()
	{
		$sql = "select * from players";

		return $this->db->query($sql)->row_array();
	}

	function players_info_stats()
	{
		$sql = "select * from user_details";
		return $this->db->query($sql)->row_array();
	}
}
