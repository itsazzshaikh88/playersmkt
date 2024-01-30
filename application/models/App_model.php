<?php

class App_model extends CI_model
{
	function app_supported_languages($type = '1')
	{
		return $this->db->where('is_active', $type)->get('languages')->result_array();
	}

	function fetchSports()
	{
		return $this->db->get('sports')->result_array();
	}
}
