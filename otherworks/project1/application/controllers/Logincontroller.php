<?php
class Logincontroller extends CI_Controller
{
	public function login()
	{
		$user['email']=$this->input->get_post('email');
		$user['password']=$this->input->get_post('password');
		$url='http://services.trainees.baabtra.com/LoginService/login.php';


		$options = array(
                        'http' => array(
                            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                            'method'  => 'POST',
                            'content' => http_build_query($user),
                            ),
                        );
        
        
        $context  = stream_context_create($options);
        $result = file_get_contents($url,false, $context);    // used to call the web service
        //echo $result;
        $response=json_decode($result,true);
      // print_r($response);
 
          //echo $response[0]['ResponseCode'];
         

        if($response[0]['ResponseCode']==200){
            $userdata['fname']=$response[0]['vchr_first_name'];
            $userdata['lname']=$response[0]['vchr_last_name'];
            $userdata['pic']=$response[0]['vchr_prof_pic'];
           
        	$this->load->view('profile',$userdata);
        }
        else  if($response[0]['ResponseCode']==500)
        {
              $userdata['fname']=$response[0]['vchr_first_name'];
            $userdata['lname']=$response[0]['vchr_last_name'];
             $userdata['pic']=$response[0]['vchr_prof_pic'];
              $userdata['uname']=$response[0]['vchr_user_name'];

        	$this->load->view('passworderror',$userdata);
        }
          else  if($response[0]['ResponseCode']==404){
        	$this->load->view('emailerror');
        }

	}
  public function validate()
  {
    
  }
}

?>