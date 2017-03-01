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

	function getdata()
	{
		$query=$this->db->select('*')-> from('user_details')->get();
		$d=$query->result_array();

		return $d;

	}

	public function view_data()
	{

		$query= $this->db->get('user_details');
		return $query->result();
	}

	public function getonerow($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('user_details');
		return $query->row();
	}

}