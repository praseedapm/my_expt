<?php
class Signupcontroller extends CI_Controller
{

	public function signin()
	{
		$flag=0;

		

			$user['fname']=$this->input->get_post('fname');
			$user['lname']=$this->input->get_post('lname');
			$flength = strlen($user['fname']);
			$llength=strlen($user['lname']);

			if($flength<1)
			{
				$msg['fname']='First name is mandatory';
				$flag=1;
			}
			else if($flength<3)
			{
				$msg['fname']='First name should be minimum 3 letters long';
				$flag=1;
			}

			else if (!preg_match('/^[a-zA-Z]/',$user['fname']))
                {
                	$msg['fname']='Invalid first name';
                	$flag=1;
                }
              //    else 
              //   {
              //   	//$msg['fname']=array('message'=>'Valid firstname');
            		// //$msg['flag']=1;

              //   }
                if($llength<1)
                {
				$msg['lname']='Last name is mandatory';
				$flag=1;
				}
				else if (!preg_match('/^[a-zA-Z]/',$user['lname']))
                {
                	$msg['lname']='Invalid last name';
                	$flag=1;
                }
                // else 
                // {
                // 	$msg['lname']=array('message'=>'Valid Lastname');
                // 	//$msg['flag']=1;
                // }

		

		 if(empty($_REQUEST['mobile']))
		 {
		 	$msg['mobile'] = 'Mobile Number is mandatory' ;
		 		$flag=1;
		 }
		 else
		 {
		 	$user['mobile']=$this->input->get_post('mobile');
		 	$moblength = strlen($user['mobile']);
		 	
		$user['mobile']=$this->input->get_post('mobile');
		 	
		 	if(strlen($user['mobile'])<10)
		 	{
		 		$msg['mobile']='Mobile number should have 10 digits';
		 		$flag=1;
			
			}
			else if(strlen($user['mobile'])>10)
		 	{
		 		$msg['mobile']='Mobile number cannot have more than 10 digits';
		 		$flag=1;
			
			}
			else if(!preg_match('/[7-9]{1}[0-9]{9}/',$user['mobile']))
		 	{
		 	$msg['mobile']='Invalid mobile number';
		 	$flag=1;
		 	}

		// 		else
		// {
			
		// 	$msg['mobile']="Valid mobile number";
		// }

		}


		
if(empty($_REQUEST['email']))
{
	$msg['email']="Email is mandatory";
	$flag=1;
}
else 
{
$user['email']=$this->input->get_post('email');
	if(!filter_var($user['email'], FILTER_VALIDATE_EMAIL) === false) 
	{

	$msg['email']="Valid email address";
} else {
  $msg['email']="Invalid email address";
$flag=1;
}
}	

	if(empty($_REQUEST['password']))
	{
		$msg['password']="Password is mandatory";
		$flag=1;
	}
	else 
{
	$user['password']=$this->input->get_post('password');
		if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,10}/',$user['password']))
 		{
		$msg['password']="Invalid password";
		$flag=1;
	}
	// else
	// {
	// 	$msg['Password']="Valid password";
	// }
}
	// if(empty($_REQUEST['day']) || empty($_REQUEST['month']) || empty($_REQUEST['year']))
	// {
	// 	$msg['dob']="Date of Birth is mandatory";
	// 	$flag=1;
	// }
	// else
	// {
	
		if(isset($_REQUEST['day']) && isset($_REQUEST['month']) && isset($_REQUEST['year']))
		{
$user['day']=$this->input->get_post('day');
$user['month']=$this->input->get_post('month');
$user['year']=$this->input->get_post('year');
if($user['day']==0 || $user['month']==0 || $user['year']==0)
{
	$msg['dob']="Date of Birth is Mandatory";
	$flag=1;
}
else
{
	$user['dob']=array($user['month'],$user['day'],$user['year']);
 
  $birthDate1= implode("/",$user['dob']);
  $birthDate = explode("/", $birthDate1);

   $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
 // echo "Age is:" . $age;
  if ($age<13) {
   	$msg['dob']= "Sorry, You are age is below 13";
   	$flag=1;
   }
   // else {
   // 	$msg['dob']="valid age";
   // }
  }}
if (empty($_REQUEST['gender']))
{
	$msg['gender']="Gender is mandatory";
	$flag=1;
}
else
{
$user['gender']=$this->input->get_post('gender');
if($user['gender']=="male" || $user['gender']=="female")
{
	$msg['gender']="valid gender";
}
else
{
	$msg['gender']="invalid gender";
	$flag=1;
}

}
if($flag==1)
{
	$msg['Responsecode']=400;
	echo json_encode($msg);
	//$this->load->view('main');
	//$msg="Signed up successfully";
}

else
{
	$this->load->model('signup_model');
	$this->Signup_model->insert_data();
}			
		

	}
}

?>