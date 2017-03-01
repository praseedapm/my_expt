<?php  

class M1 extends CI_Model
{
	public function insert_data($data)
	{
	$this->load->database();
		if($this->db->insert('user_details',$data))
		{
		return true;
		}
	else{
		echo "database insertion failed";
		}
	}
	public function view_data()
	{
		$this->load->database();
		$query=print('user_details');
		$res=$query->result_array();
		$this->load->view('index',$res);
		return $res;

	}
}