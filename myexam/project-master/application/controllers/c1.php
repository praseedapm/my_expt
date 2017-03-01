<?php
class C1 extends CI_Controller
{
public function index()
{
	$this->load->view('a');
}	
public function insert()
{
	$name= $this->input->post('name');
	$phone=$this->input->post('phone');
	$email=$this->input->post('email');
	$gender=$this->input->post('gender');
	$hobbies=$this->input->post('hobbies');
	$pic=$this->input->post('pic');
	$country=$this->input->post('country');
	$data=  array('name' =>$name, 'phone' =>$phone, 'email' =>$email, 'gender' =>$gender, 'hobbies' =>$hobbies, 'pic'=>$pic, 'country' =>$country);
	$this->load->model('m1');
	if($this->m1->insert_data($data))
	{
		$this->view_data();
	}

}
public function view_data()
{
	$this->load->model('m1');
	$this->m1->view_data();

}

}