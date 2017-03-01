<?php
Class C1 extends CI_Controller
{
	public function index()
	{
       $ab['data']=  $this->m1->select();

		$this->load->view('main',$ab);

	}
	public function insert()
	{
		$name= $this->input->post('name');
		$age= $this->input->post('age');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$regdata = array('name' => $name, 'age' => $age, 'email' =>$email, 'password' =>$password);
		
		if($this->m1->insert($regdata))
		{
			redirect('c1/index');
		}
	}
	public function home()
	 {
	 	$id=$this->session->userdata('id');
	 	 $x['data']=	$this->m1->home($id);
		
			$this->load->view('home');
	 	echo "id is:"."$id";
	}
	public function edit()
	{
		$id=$this->input->get_post('id');
		$udata['abc']=$this->m1->edit($id);
		$this->load->view('edit',$udata);
	}
	public function update()
	{
		$value=array();
		$value['id']=$this->input->post('id');
		$value['name']=$this->input->post('name');
		$value['email']=$this->input->post('email');
		$value['password']=$this->input->post('password');
		$value['age']=$this->input->post('age');
		// $value['gender']=$this->input->post('r');
		// $value['hobb']=$this->input->post('c');
		// $value['hobby']=implode(',',$value['hobb']);
		// 		$value['country']=$this->input->post('country');
	//$this->load->model('InsertModel');
 if($this->m1->update($value))
{
	redirect('c1/index');
}

		// $id=$this->input->get_post('id');
		// $name= $this->input->post('name');
		// $age= $this->input->post('age');
		// $email=$this->input->post('email');
		// $password=$this->input->post('password');
		// $regdata = array('id'=>$id,'name' => $name, 'age' => $age, 'email' =>$email, 'password' =>$password);
		// if($this->m1->update($regdata))
		// {
		// 	redirect('c1/index');
		// }
	}
	public function set_session1()
	{
		
	}
	public function logincheck()
	{
		$uname=$this->input->post('uname');
		$pword=$this->input->post('pword');
		$utype=$this->input->post('utype');
	
		if($this->m1->logincheck($uname,$pword,$utype))
		{

			  $data = array(
                    'username' => $uname,
                    'usertype' => $utype,
                     'logged_in' => true 
                );

               $this->session->set_userdata($data);
           
	$view['data']=$this->m1->view($uname);
	 $this->load->view('home',$view);
}
			
			
		
		
		
		else
		{
				echo "Login failed";
		}
	}

public function delete()
{
	$id=$this->input->get_post('id');
	if($this->m1->delete($id))
	{
		redirect('c1/index');
	}

}
	public function logout()
	{
		$this->session->unset_userdata($data);
		redirect('c1/index');
	}
		
	
}