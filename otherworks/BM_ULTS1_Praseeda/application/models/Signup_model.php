<?php
class Signup_model extends CI_Model
{
	$this->load->database('facebook_db');

public function insert_data($fname,$lname,$mobile,$email,$password,$gender,$dob)
{
	$data=array('firstname' => $fname, 'lastname'=>$lname,'mobile'=>$mobile,'email'=>$email,'password'=>$password,'gender'=>$gender );
	$query= $this->db->insert('user_signup_data',$data);
}
}