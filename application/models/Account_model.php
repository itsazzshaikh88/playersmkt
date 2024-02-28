<?php 


class Account_model extends CI_Model {


    function follow()
    {
        // Code to response
		/*
        0 => 'Following Club'
        1 => 'Failed To Follow Club'
        2 => 'UnFollowed Club'
        3 => 'UnFollowing Failed'
    */
		$user_type       	= $this->input->post('user_type');
		$following_to   	= $this->input->post('following_to');
		$followed_by     	= $this->input->post('followed_by');
		$followed_user_type = $this->input->post('followedType');
		$follow_type 		= $this->input->post('followType');

		if ($follow_type == 'follow') {
			if ($this->db->query("INSERT INTO followers (`following_user_type`,`following_to`,`followed_by`,`followed_by_user_type`,status) VALUES ('$user_type','$following_to','$followed_by','$followed_user_type','Followed')"))
				$data['status'] = 0;
			else
				$data['status'] = 1;
		} else if ($follow_type == 'unfollow') {
			if ($this->db->query("delete from followers where following_user_type = '$user_type' and following_to = '$following_to' AND followed_by = $followed_by"))
				$data['status'] = 2;
			else
				$data['status'] = 3;
		}

		return $data;
    }

}