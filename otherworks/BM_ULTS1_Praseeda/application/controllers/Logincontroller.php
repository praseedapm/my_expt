<?php
class Logincontroller extends CI_Controller
{
	public function login()
	{
		$user['email']=$this->input->get_post('email');
		$user['password']=$this->input->get_post('password');
	//	$url='http://services.trainees.baabtra.com/LoginService/login.php';
    $url='http://services.trainees.baabtra.com/BM-ULTS1-athira-services/index.php/Loginservice/userAuth';


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
       //print_r($response);
 
          //echo $response[0]['ResponseCode'];
         

        if($response['ResponseCode']==200){
            $userdata['fname']=$response['vchr_first_name'];
            $userdata['lname']=$response['vchr_last_name'];
            $userdata['pic']=$response['vchr_prof_pic'];
           
        	$this->load->view('profile',$userdata);
        }
        else  if($response['ResponseCode']==500)
        {
              $userdata['fname']=$response['vchr_first_name'];
            $userdata['lname']=$response['vchr_last_name'];
             $userdata['pic']=$response['vchr_prof_pic'];
              $userdata['uname']=$response['vchr_user_name'];

        	$this->load->view('passworderror',$userdata);
        }
          else  if($response['ResponseCode']==404){
        	$this->load->view('emailerror');
        }

	}


    public function signin()
    {
        $sign['fname']=$this->input->get_post('fname');
        $sign['lname']=$this->input->get_post('lname');
        $sign['mobile']=$this->input->get_post('mobile');
        $sign['email']=$this->input->get_post('email');
        $sign['password']=$this->input->get_post('password');
        $sign['gender']=$this->input->get_post('gender')
        $sign['day']=$this->input->get_post('day');
        $sign['month']=$this->input->get_post('month');
        $sign['year']=$this->input->get_post('year');

         $url='http://localhost/signup_service/index.php/Signupcontroller/signin';
         $options = array(
                        'http' => array(
                            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                            'method'  => 'POST',
                            'content' => http_build_query($sign),
                            ),
                        );
         $context  = stream_context_create($options);
        $result = file_get_contents($url,false, $context);    // used to call the web service
        $response1=json_decode($result,true);

            if($response1['Responsecode']==400)
            {
                $err['fname']=$response1['fname'];
                $err['lname']=$response1['lname'];
                 $err['mobile']=$response1['mobile'];
                 $err['email']=$response1['email'];
                 $err['password']=$response1['password'];
                 $err['gender']=$response1['gender'];
                 $err['dob']=$response1['dob'];
                $this->load->view('main',$err);
            }
            


    }

}


?>