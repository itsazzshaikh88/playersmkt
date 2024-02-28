<?php

class Contact_model extends CI_Model
{
    function add()
    {
        $users_id = $this->input->post('-');
       
        $user_id = $this->userid;
        $user_type = $this->usertype;

       $use_id = $users_id == null ? '' : $user_id;
       $use_ty = $user_type == null ? 'R' : $user_type;

        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $massage = $this->input->post('massage');
        $sql = " INSERT INTO contact_messages (user_id, user_type, name, email, subject, comment) VALUES ('$use_id', '$use_ty', '$name', '$email', '$subject', '$massage')";
        // print_r($sql);
        // die();
        return $this->db->query($sql);
        
    }
}
