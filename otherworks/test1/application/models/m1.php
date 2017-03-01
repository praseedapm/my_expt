<?php
/**
* 
*/
class m1 extends CI_Model
{
	
	function insert($data)
	{
		$this->db->insert('user_details',$data);
	}
		function select()
	{
		$query=$this->db->select('*')
		->from('user_details')
		->get();
		$res=$query->result_array();

		return $res;

	}
	function edit($id)
	{
		$query=$this->db->select('*')
		->from('employee')
		->where('id',$id)
		->get();
		$res=$query->result_array();

		return $res;

	}

public function delete($id)
	{
$this->db->where('id',$id);
$this->db->delete('user_details');
return true;
	}


public function update_data($n)
{
	$data=array('name'=>$n['name'],'email'=>$n['email'],'phone'=>$n['phone'],'gender'=>$n['gender'],'hobby'=>$n['hobby'],'country'=>$n['country']);
$this->db->where('id',$n['id']);
$this->db->update('user_details',$data);
return true;
}

}