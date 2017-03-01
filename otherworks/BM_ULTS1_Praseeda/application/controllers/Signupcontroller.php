<?php
class Signupcontroler extends CI_Controller
{

	public function signin()
	{
		$msg['flag']=0;

		if(isset($_REQUEST['fname']) && isset($_REQUEST['lname']))
{


			$user['fname']=$this->input->get_post('fname');
			$user['lname']=$this->input->get_post('lname');
			$flength = strlen($user['fname']);
			$llength=strlen($user['lname']);

			if($flength<1)
			{
				$msg['fname']=array('message'=>'First name is mandatory');
				$msg['flag']=1;
			}
			else if($flength<3)
			{
				$msg['fname']=array('message'=>'First name should be minimum 3 letters long');
				$msg['flag']=1;
			}

			else if (!preg_match('/^[a-zA-Z]/',$user['fname']))
                {
                	$msg['fname']=array('message'=>'Invalid first name');
                	$msg['flag']=1;
                }
              //    else 
              //   {
              //   	//$msg['fname']=array('message'=>'Valid firstname');
            		// //$msg['flag']=1;

              //   }
                if($llength<1)
                {
				$msg['lname']=array('message'=>'Last name is mandatory');
				$msg['flag']=1;
				}
				else if (!preg_match('/^[a-zA-Z]/',$user['lname']))
                {
                	$msg['lname']=array('message'=>'Invalid last name');
                	$msg['flag']=1;
                }
                // else 
                // {
                // 	$msg['lname']=array('message'=>'Valid Lastname');
                // 	//$msg['flag']=1;
                // }

		}
		

		 if(empty($_REQUEST['mobile']))
		 {
		 	$msg['mobile'] = array('message' =>'Mobile Number is mandatory' );
		 		$msg['flag']=1;
		 }
		 else
		 {
		 	$user['mobile']=$this->input->get_post('mobile');
		 	$moblength = strlen($user['mobile']);
		 	
		$user['mobile']=$this->input->get_post('mobile');
		 	
		 	if(strlen($user['mobile'])<10)
		 	{
		 		$msg['mobile']=array('message'=>'Mobile number should have 10 digits');
		 		$msg['flag']=1;
			
			}
			else if(strlen($user['mobile'])>10)
		 	{
		 		$msg['mobile']=array('message'=>'Mobile number cannot have more than 10 digits');
		 		$msg['flag']=1;
			
			}
			else if(!preg_match('/[7-9]{1}[0-9]{9}/',$user['mobile']))
		 	{
		 	$msg['mobile']=array('message'=>'Invalid mobile number');
		 	$msg['flag']=1;
		 	}

		// 		else
		// {
			
		// 	$msg['mobile']="Valid mobile number";
		// }

		}


		
if(empty($_REQUEST['email']))
{
	$msg['Email']="Email is mandatory";
	$msg['flag']=1;
}
else 
{
$user['email']=$this->input->get_post('email');
	if(!filter_var($user['email'], FILTER_VALIDATE_EMAIL) === false) 
	{

	$msg['Email']="Valid email address";
} else {
  $msg['Email']="Invalid email address";
$msg['flag']=1;
}
}	

	if(empty($_REQUEST['password']))
	{
		$msg['Password']="Password is mandatory";
		$msg['flag']=1;
	}
	else 
{
	$user['Password']=$this->input->get_post('password');
		if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,10}/',$user['Password']))
 		{
		$msg['Password']="Invalid password";
		$msg['flag']=1;
	}
	// else
	// {
	// 	$msg['Password']="Valid password";
	// }
}
	if(empty($_REQUEST['day']) || empty($_REQUEST['month']) || empty($_REQUEST['year']))
	{
		$msg['dob']="Date of Birth is mandatory";
		$msg['flag']=1;
	}
	else
	{
	
		
$user['day']=$this->input->get_post('day');
$user['month']=$this->input->get_post('month');
$user['year']=$this->input->get_post('year');
	$user['dob']=array($user['month'],$user['day'],$user['year']);
 
  $birthDate1= implode("/",$user['dob']);
  $birthDate = explode("/", $birthDate1);

   $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
 // echo "Age is:" . $age;
  if ($age<13) {
   	$msg['dob']= "Sorry, You are age is below 13";
   	$msg['flag']=1;
   }
   // else {
   // 	$msg['dob']="valid age";
   // }
  }
if (empty($_REQUEST['gender']))
{
	$msg['gender']="Gender is mandatory";
	$msg['flag']=1;
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
	$msg['flag']=1;
}

}
if($msg['flag']==0)
{
	
	$this->load->view('main');
	//$msg="Signed up successfully";
}
			
		echo json_encode($msg);

	}
}

