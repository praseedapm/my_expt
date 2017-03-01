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

	public function edit($id)
	{
		$this->load->database();
		$query=$this->db->select('*')->from ('user_details')->where('id',$id)->get();
		$n=$query->result_array();
		return $n;
	}

	public function selectdata()
	{
		$this->load->database();
		$query=$this->db->select ('*')->from ('user_details')->get();
		$r=$query->result_array();
		//$this->load->view('index',$res);
		return $r;

	}
	public function update($ar)
	{
		$data=  array('name' =>$ar['name'], 'phone' =>$ar['phone'], 'email' =>$ar['email'], 'gender' =>$ar['gender'], 'hobbies'=>$ar['hob'], 'country' =>$ar['country']);

		$this->load->database();
		$this->db->where('id',$ar['id']);
		$this->db->update('user_details',$data);

			return true;
		
	}
public function delete($id)
{
	$this->load->database();
$this->db->where('id',$id);
$this->db->delete('user_details');
return true;
}


// public function update($value)
// {
// 	$id1=$value['id'];
// 	$data=array('name'=>$value['name'],'email'=>$value['email'],'phone'=>$value['phone'],'gender'=>$value['gender'],'hobbies'=>$value['hob'],'country'=>$value['country']);
// 	$this->load->database();
// $this->db->where('id',$id1);
// $this->db->update('user_details',$data);
// return true;
// }

// public function form_update($value)
// {
// 	$data=array('name'=>$value['name'],'email'=>$value['email'],'phone'=>$value['phone'],'gender'=>$value['gender'],'hobbies'=>$value['hob'],'country'=>$value['country']);
// $this->db->where('id',$value['id']);
// $this->db->update('user_details',$data);
// return true;
// }
}