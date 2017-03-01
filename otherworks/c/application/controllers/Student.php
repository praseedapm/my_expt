<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller
{
	 
	public function index()
	{
		$this->load->view("index");
			
	}
	public function insertdata()
	{
		//create array for get data from index
		$data= array(
						'name' => $this->input->post('name'),
						'email' => $this->input->post('email'),
						'phone' => $this->input->post('phone'),
		
					);
		//means this data insert into table name std

					$this->db->insert('std',$data);
				    redirect("Student/index");
	}
	public function edit($id)
	{
		$row=$this->StudentModel->getonerow($id);
		$data['r']=$row;
		$this->load->view('edit',$data);
		//redirect('Student/edit');
	}
	public function update()
	{
		$id=$this->input->post('id');
		$data= array(
						
						'name' => $this->input->post('name'),
						'email' => $this->input->post('email'),
						'phone' => $this->input->post('phone'),
		
		
					);
						$this->db->where('id',$id);
						$this->db->update('std',$data);
						redirect("Student/index");
		
	}
	public function delete($id)
	{
		$id=$this->db->where('id',$id);
		$this->db->delete('std',$id);
		redirect("Student/index");
	}
	
}
