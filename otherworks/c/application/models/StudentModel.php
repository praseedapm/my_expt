<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class StudentModel extends CI_Model
{
	
	public function viewdata()
	{
		$query= $this->db->get('std');
		return $query->result();
	}
	public function getonerow($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('std');
		return $query->row();
	}
}