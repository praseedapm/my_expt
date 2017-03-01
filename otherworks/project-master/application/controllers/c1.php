<?php
class C1 extends CI_Controller
{

public function index()
{
	$this->load->model('m1');
	$res['data']=$this->m1->selectdata();
	$this->load->view('index',$res);
}	

public function edit()
{

	$this->load->model('m1');
	$id=$this->input->get_post('id');
	$n['data']=$this->m1->edit($id);
	$this->load->view('edit',$n);

}
public function insert()
{
	$name= $this->input->post('name');
	$phone=$this->input->post('phone');
	$email=$this->input->post('email');
	$gender=$this->input->post('gender');
	$hobbies=$this->input->get_post('hobbies');
	$hob=implode(',',$hobbies); 
	//$pic=$this->input->post('pic');
	$country=$this->input->post('country');
	$data=  array('name' =>$name, 'phone' =>$phone, 'email' =>$email, 'gender' =>$gender, 'hobbies'=>$hob, 'country' =>$country);
	$this->load->model('m1');
	$this->m1->insert_data($data);
	$this->load->helper('url');
	redirect('c1/index');

}

	// public function update()
	// {
	// 	$id=$this->input->post('id');
	// 	$data= array(
						
	// 					'name' => $this->input->post('name'),
	// 					'email' => $this->input->post('email'),
	// 					'phone' => $this->input->post('phone'),
	// 					'gender'=> $this->input->post('gender'),
	// 					'hobbies'=> implode(',', $this->input->post('hobbies')),
	// 					'country'=> $this->input->post('country')
		
		
	// 				);
	// 	$this->load->database();
	// 					$this->db->where('id',$id);
	// 					$this->db->update('user_details',$data);
	// 					$this->load->helper('url');
	// 					redirect("c1/index");
		
	// }

public function update()
{
	$ar=array();
	$ar['id']=$this->input->get_post('id');
	$ar['name']= $this->input->post('name');
	$ar['phone']=$this->input->post('phone');
	$ar['email']=$this->input->post('email');
	$ar['gender']=$this->input->post('gender');
	$hobbies=$this->input->get_post('hobbies');
	$ar['hob']=implode(',',$hobbies); 
	$ar['country']=$this->input->post('country');
	

	$this->load->model('m1');
	$this->m1->update($ar);
	 $this->load->helper('url');
	 redirect('c1/index');

}


public function delete()
{
$id1=$this->input->get('id');
$this->load->model('m1');
    $this->m1->delete($id1);	
     $this->load->helper('url');
	 redirect('c1/index');
}

}