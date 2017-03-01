<?php /**
* 
*/
class C1 extends CI_Controller
{
	public function index()
	{
		$res['data']=$this->m1->select();

		$this->load->view('main',$res);
	}
 	
 	public function insert()
 	{
 		$name=$this->input->post('name');
 		$age=$this->input->post('age');
 		$email=$this->input->post('email');
 		$password=$this->input->post('password');
 		//echo "hai".$name;
 		$userdata=array('name'=> $name, 'age'=> $age, 'email'=> $email,'password'=>$password);
 		if($this->m1->insert($userdata))
 		{
 			redirect("c1/index");
 		}
 	}
 	public function update()
 	{

 		$value=array();
		$value['id']=$this->input->post('id');
		$value['name']=$this->input->post('name');
		$value['email']=$this->input->post('email');
		$value['password']=$this->input->post('password');
		$value['age']=$this->input->post('age');
		if($this->m1->update($value))
{
	redirect('c1/index');
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
 	public function edit()
 	{
 		$id=$this->input->get_post('id');
 		$q=$this->db->select('*')->from('myworktable')->where('id',$id)->get();
 		$res['data']=$q->result_array();
 		$this->load->view('edit',$res);
 	}


}