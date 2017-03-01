<?php
class Logincontroler extends CI_Controller{



	public function sample()
	{
		$user['email']=$this->input->get_post('name');
		$user['password']=$this->input->get_post('pass');
		// $url='http://services.trainees.baabtra.com/LoginService/login.php';
        $url='http://services.trainees.baabtra.com/BM-ULTS1-RAGISHA_services/index.php/LoginService/userAuth';
		$options = array(
                        'http' => array(
                            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                            'method'  => 'POST',
                            'content' => http_build_query($user),
                            ),
                        );
		$context  = stream_context_create($options);
        $result = file_get_contents($url,false, $context);    // used to call the web service
        $response=json_decode($result,true);
        // print_r($response);
        //print_r($response);
        // echo $response[0]['ResponseCode'];

        if($response['ResponseCode']==200){
            $details1['fname']=$response['firstname'];
            $details1['lname']=$response['lastname'];
            $details1['pic']=$response['pic'];
            // $details1['fname']=$response[0]['vchr_first_name'];
            // $details1['lname']=$response[0]['vchr_last_name'];
            // $details1['pic']=$response[0]['vchr_prof_pic'];
        	$this->load->view('success.html',$details1);
        }
        if($response['ResponseCode']==500)
        {
            $details['fname']=$response['firstname'];
            $details['lname']=$response['lastname'];
            $details['pic']=$response['pic'];
            $details['name']=$response['username'];


            // $details['fname']=$response[0]['vchr_first_name'];
            // $details['lname']=$response[0]['vchr_last_name'];
            // $details['pic']=$response[0]['vchr_prof_pic'];
            // $details['name']=$response[0]['vchr_user_name'];


        	$this->load->view('passinc.html',$details);
        }
        if($response['ResponseCode']==404)
        {
            
        	$this->load->view('emailinc.html');
        }
        // else
        // {
        // 	print_r($response);
        // }
        // if($response[0]['ResponseCode']==)

	}


    public function sign()
    {
        $sign['fname']=$this->input->get_post('fname');
        $sign['lname']=$this->input->get_post('lname');
        $sign['number']=$this->input->get_post('number');
        $sign['email']=$this->input->get_post('email');
        $sign['password']=$this->input->get_post('password');
        $sign['day']=$this->input->get_post('day');
        $sign['month']=$this->input->get_post('month');
        $sign['year']=$this->input->get_post('year');

         $url='http://localhost/signup/index.php/Signcontroler/signin';
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
                // $err['number']=$response1['number'];
                $this->load->view('fbbs.html',$err);
            }
            


    }
}


?>