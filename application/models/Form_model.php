<?php
class Form_model extends CI_model
{
	function fetchformlist($id)
	{
		$sql = "SELECT DISTINCT id, form_name,form_table_name FROM custom_form_header WHERE sport_id = '$id'";
		return $this->db->query($sql)->result_array();
	}

	function fetchcustomformlist($form_id)
	{
		return $this->db->query("SELECT * FROM custom_form_lines where header_id = $form_id")->result_array();
	}

	function cust_details($id, $form_id)
	{
		$table_sql = $this->db->query("SELECT * FROM custom_form_header where id = $form_id")->row_array();
		$table = $table_sql['form_table_name'];
		$data['lables'] = $labels =  $this->db->query("SELECT field_name,column_name FROM custom_form_lines where header_id = $form_id")->result_array();
		$data['data'] = $this->db->query("SELECT * FROM $table where user_id = $id")->row_array();
		return $data;
	}
}
