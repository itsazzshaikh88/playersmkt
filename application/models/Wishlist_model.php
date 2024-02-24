<?php 

class Wishlist_model extends CI_Model{

    function add()
    {
        $data = $this->input->get();


        $sql = $this->db->query("INSERT INTO wishlist (user_id,user_type,added_by,added_by_type) VALUES ('$data[id]','$data[type]','$this->userid','$this->usertype')");

        if($sql)
            $data['status'] = 1;
        else
            $data['status'] = 0;
        
            return $data;

    }
    function remove()
    {
        $data = $this->input->get();


        $sql = $this->db->query("DELETE FROM wishlist WHERE  user_id = '$data[id]' and user_type = '$data[type]' and added_by = '$this->userid' and added_by_type = '$this->usertype'");

        if($sql)
            $data['status'] = 1;
        else
            $data['status'] = 0;
        
            return $data;

    }

}