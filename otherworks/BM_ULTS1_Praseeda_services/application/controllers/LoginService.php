<?php
/**
* 
*/
class LoginService extends CI_Controller
{
	public function usercheck()
	{
		if(isset($_REQUEST['email']) && isset($_REQUEST['password']))
		{

			$user['email']=$this->input->get_post('email');
			$user['password']=$this->input->get_post('password');
			$this->load->model('LoginModel'); //creates an object of the model class
			$msg=$this->LoginModel->findUSer($user);	//calls the function of the model class
		}
					
		else
		
			$msg=array('ResponseCode' =>404,'Msg'=> 'Email or password is not defined');
		
		echo json_encode($msg);
	}
	
}

?>