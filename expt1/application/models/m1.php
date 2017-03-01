<?php
Class M1 extends CI_Model
{
	public function insert($regdata)
	{
		$this->db->insert('regdata',$regdata);
		return true; 
	}
	public function select()
	{
		$query=	$this->db->select('*')->from('regdata')->get();
		$result=$query->result_array();
		return $result;
	}
	public function selectbyid($id)
	{
		$query=	$this->db->select('*')->from('regdata')->where('id',$id)->get();
		$result=$query->result_array();
		return $result;
	}
	public function edit($id)
	{
		$query= $this->db->select('*')->from('regdata')->where('id',$id)->get();
		$res= $query->result_array();
		return $res;
	}
	public function update($value)
	{

		$data=array('name'=>$value['name'],'email'=>$value['email'],'password'=>$value['password'],'age'=>$value['age']);
$this->db->where('id',$value['id']);
$this->db->update('regdata',$data);
return true;
		
		// $udata= array('name' =>$regdata['name'] ,'age'=>$regdata['age'],'email'=>$regdata['email'],'password'=>$regdata['password'] );
		// $this->db->where('id',$regdata['id']);
		// $this->update('regdata',$udata);
		//$query=$this->db->update('regdata',$regdata)->where('id',$id)->get();
		//$result=$query->result_array();
		//return true;
	}
	public function delete($id)
	{
		//$this->db->delete('*')->from('regdata')->where('id',$id);
		$this->db->where('id',$id);
		$this->db->delete('regdata');
		return true;
	}
	public function logincheck($uname,$pword,$utype)
	{
		if($utype=="User")
		{
		$logdata = array('email' => $uname, 'password' => $pword );
		$query=$this->db->select('*')->from('regdata')->where($logdata)->get();
		
		 if($query->num_rows()==1)
		 {
		 	// $res= $query->result_array();
		 	// return $res->row();
		 	//return $query->row();
		 return true;
		 	///$this->session->set_userdata($res);
			
		 }
		  else
		 {
		 	echo "Login failed";
		 }

		
		}

		else if($utype=="Admin")
		{
			$logdata = array('email' => $uname, 'password' => $pword );
		$query=$this->db->select('*')->from('admindata')->where($logdata)->get();
		
		 if($query->num_rows()==1)
		 {
		 	return true;
		 }
		 else
		 {
		 	echo "Login failed";
		 }
		}
	}
	public function view($uname)
	{
		$query=$this->db->select('*')->from('regdata')->where('email',$uname)->get();
		$res=$query->result_array();
		return $res;
	}
}

?>