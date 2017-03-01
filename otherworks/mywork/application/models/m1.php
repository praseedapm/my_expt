<?php
/**
* 
*/
class M1 extends CI_Model
{
	public function insert($userdata)
	{
		$this->db->insert('myworktable',$userdata);
		return true;
	}
	public function select()
	{
		$q=$this->db->select('*')->from('myworktable')->get();
		$result= $q->result_array();
		return $result;
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('myworktable');
		return true;
	}
	public function update($value)
	{
		

		$data=array('name'=>$value['name'],'email'=>$value['email'],'password'=>$value['password'],'age'=>$value['age']);
$this->db->where('id',$value['id']);
$this->db->update('myworktable',$data);
return true;

		// $udata= array('name' => $userdata['name'],'age'=>$userdata['age'],'email'=>$userdata['email'],'password'=>$userdata['password'] );
		// $this->db->where('id',$userdata['id']);
		// $this->db->update('myworktable',$udata);
		// return true;
	}
}