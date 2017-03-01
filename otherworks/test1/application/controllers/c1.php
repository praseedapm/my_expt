<?php
class C1 extends CI_Controller
{
function insert()
{
	$name=$this->input->get_post('name');
	$phone=$this->input->get_post('phone');
	$email=$this->input->get_post('email');
	$gender=$this->input->get_post('gender');
	$hobby=$this->input->get_post('hobby');
	$hob=implode(',',$hobby); 

    $country=$this->input->get_post('country');
	// echo $country;
$data=array('name'=>$name,'phone'=>$phone,'email'=>$email,'gender'=>$gender,'hobby'=>$hob,'country'=>$country);

$this->load->model('m1');
$this->m1->insert($data);
}


public function delete()
{
	$id=$this->input->get('id');
$this->load->model('m1');
    $this->m1->delete($id);
}
public function index()
	{
		$this->load->model('m1');
		$user['data']=$this->m1->select();
		$this->load->view('index',$user);
	}
	
	 public function edit()
    {
    	$this->load->model('m1');
        $id=$this->input->get_post("id");
    
$view['data']=$this->m1->edit($id);
        $this->load->view('edit',$view);
    }   
    public function update()
	{
		$n=array();
		$n['id']=$this->input->post('id');
		$n['name']=$this->input->post('name');
		$n['email']=$this->input->post('email');
		$n['phone']=$this->input->post('phone');
		$n['gender']=$this->input->post('gender');
		$n['hobby']=$this->input->post('hobby');
		$n['hob']=implode(',',$value['hobby']);
		$n['country']=$this->input->post('country');
	$this->load->model('m1');
 $this->m1->update_data($n);

	}


}
?>