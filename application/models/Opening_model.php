<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opening_model extends CI_Model 
{

	public function add()
	{

		$name = $this->input->POST('title');	
		$desc = $this->input->POST('description');
		$sub_title = $this->input->POST('sub_title');

		$time = date('Y-m-d H:i:s');
		

	
		$data = array('title'=>$name,'description'=>$desc,'created_at'=>$time,'sub_title'=>$sub_title);
		$this->db->insert('tbl_opening', $data);

			
		
	}


	public function get()
	{
		
      $result = $this->db->get('tbl_opening');

	   return $result->result_array();	
	}

	public function del($id)
	{
		 $this->db->where('id', $id);
		 $this->db->delete('tbl_opening');		
	}
	
	
}