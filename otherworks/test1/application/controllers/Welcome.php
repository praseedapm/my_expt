<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('InsertModel');
		$view['data']=$this->InsertModel->select();
		$this->load->view('addemployee.php',$view);
	}
	
	 public function edit()
    {
    	$this->load->model('InsertModel');
        $id=$this->input->get_post("id");
    
$view['data']=$this->InsertModel->edit($id);
        $this->load->view('editemployee',$view);
    }   
    public function update()
	{
		$value=array();
		$value['id']=$this->input->post('id');
		$value['name']=$this->input->post('name');
		$value['email']=$this->input->post('email');
		$value['phone']=$this->input->post('phone');
		$value['gender']=$this->input->post('r');
		$value['hobb']=$this->input->post('c');
		$value['hobby']=implode(',',$value['hobb']);
				$value['country']=$this->input->post('country');
	$this->load->model('InsertModel');
 $this->InsertModel->form_update($value);

	}
	public function m()
	{
		echo "string";
	}


}
