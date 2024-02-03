<?php

class lists_model extends CI_Model 
{
	
	function ClubFetch()
	{
		$sql = "select * from clubs";
		return $this->db->query($sql)->result_array();
	}
	function players()
	{
		$sql = "select * from players;";
		return $this->db->query($sql)->result_array();
	}
}
