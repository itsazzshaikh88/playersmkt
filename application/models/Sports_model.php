<?php

class Sports_model extends CI_Model
{
    function fetch_sport()
    {

        $sql = "select * from sports";
        return $this->db->query($sql)->result_array();
    }

    function player_Fetch()
    {
        $sql = "select * from players LIMIT 10";
        return $this->db->query($sql)->result_array();
    }
    function ClubFetch()
    {
        $sql = "select * from clubs LIMIT 10";
        return $this->db->query($sql)->result_array();
    }
}
