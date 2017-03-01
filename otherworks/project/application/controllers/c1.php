<?php
class C1 extends CI_Controller
{
public function index()
{
	$this->load->model('m1');
	$user['data']=$this->m1->getdata();
	$this->load->view('index',$user);
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
		// header("location:echo base_url./c1/index");
		$this->load->view('index');
		//$this->load->helper('url');
		//redirect('c1/index');
	}

}

public function edit($id)
	{
		$row=$this->m1->getonerow($id);
		$data['r']=$row;
		$this->load->view('edit',$data);
		//redirect('Student/edit');
	}
	public function update()
	{
		$name= $this->input->post('name');
	$phone=$this->input->post('phone');
	$email=$this->input->post('email');
	$gender=$this->input->post('gender');
	$hobbies=$this->input->post('hobbies');
	$pic=$this->input->post('pic');
	$country=$this->input->post('country');
	$data=  array('name' =>$name, 'phone' =>$phone, 'email' =>$email, 'gender' =>$gender, 'hobbies' =>$hobbies, 'pic'=>$pic, 'country' =>$country);
						$this->db->where('id',$id);
						$this->db->update('user_details',$data);
						redirect("c1/index");
		
	}
	public function delete($id)
	{
		$id=$this->db->where('id',$id);
		$this->db->delete('user_details',$id);
		redirect("c1/index");
	}
	

}