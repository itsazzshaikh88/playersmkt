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
        $sql = "select p.player_id,s.sport_name,p.id
        from players p
        left join sports s on s.sr_no=p.sport_id
        LIMIT 10";
        return $this->db->query($sql)->result_array();
    }
    function ClubFetch()
    {
        $sql = "select p.club_id,s.sport_name,p.id
        from clubs p
        left join sports s on s.sr_no=p.id
        LIMIT 10";
        return $this->db->query($sql)->result_array();
    }
}
