<?php

class Club_model extends CI_Model
{

    public function sports()
    {
        $sql = "SELECT sr_no,sport_name FROM sports";
        return $this->db->query($sql)->result_array();
    }

    // for club list
    function ClubFetch()
    {
        $sql = "select p.club_id,s.sport_name,p.id
        from clubs p
        left join sports s on s.sr_no=p.id
        LIMIT 10;";
        return $this->db->query($sql)->result_array();
    }

    function fetch_clubs($multi)
    {
        $data =  $this->input->get();
        $data = array_filter($data, function ($value) {
            return $value !== null && $value !== '';
        });

        unset($data['rowcount']);
        unset($data['scroll']);


        // Table names
        $table1 = 'clubs';
        $table2 = 'sports';

        // Select fields from tables
        $this->db->select('clubs.id,clubs.country,clubs.club_id,sports.sport_name,clubs.city');

        // Joins
        $this->db->from($table1);
        $this->db->join($table2, 'sports.sr_no = clubs.club_name', 'left');
        // Dynamic conditions
        if (!empty($data)) {
            $this->db->where($data);
        }

        // Execute the query
        $query = $this->db->get();

        // Return the result
        return $query->result_array();
    }


    function fetch_position()
    {
        $id = $this->input->get('id');
        $sql = "SELECT * FROM sport_positions WHERE sport_id=$id";
        return $this->db->query($sql)->result_array();
    }

    function get_club_id($id)
    {
        $sql = "SELECT * FROM clubs WHERE id=$id";
        return $this->db->query($sql)->row_array();
    }

    function get_club_info($id)
    {
        $sql = "SELECT * FROM club_details WHERE id=$id";
        return $this->db->query($sql)->row_array();
    }
}
