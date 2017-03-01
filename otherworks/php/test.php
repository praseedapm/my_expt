<?php


	$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$dob=array($_POST['month'],$_POST['day'],$_POST['year']);
$birthDate1= implode("/",$dob);
//$gender=$_POST['r1'];
$val=true;


function validate()
{
	$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$dob=array($_POST['month'],$_POST['day'],$_POST['year']);
//$gender=$_POST['r1'];
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
$val=true;
	
if (strlen($fname)==0)
 {
	echo "Firstname is mandatory<br>";
	$val= false;
}
else if(strlen($fname)<3)
{
	echo "Firstname should contain minimum 3 characters<br>";
	$val=false;
}
else if(!preg_match("/^[a-zA-Z]+$/",$fname))
{
	echo "alphabets only";
	$val=false;
}

if(strlen($lname)==0)
{
	echo "Lastname is mandatory<br>";
	$val=false;
}
else if(!preg_match("/^[a-zA-Z]+$/",$lname))
{
	echo "alphabets only";
	$val=false;
}

if(strlen($email)==0)
{
	echo "Email is mandatory<br>";
	$val=false;
}

else if (!preg_match($regex, $email)) 
{


echo "invalid email<br>";
$val=false;
}
if(strlen($mobile)==0 ) 
{
	echo "<br>please enter a mobile number";
	$val=false;
}
else if(!preg_match("/[7-9]{1}[0-9]{9}/",$mobile)){
	echo "<br>invalid phone number";
	$val=false;
}
if(strlen($password)==0)
{
	echo "Password is mandatory<br>";
	$val=false;
}
else if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,13}/', $password))
{
	echo "invalid password<br>";
	$val=false;
}
// if(!isset($_POST['r']))
// { 
//        echo "Select gender"."<br>";
//        $val=false;
//     }
    


// $regex= '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,10}/';

// $uppercase = preg_match('@[A-Z]@', $password);
// $lowercase = preg_match('@[a-z]@', $password);
// $number    = preg_match('@[0-9]@', $password);
// $symbol    = preg_match('@[]@', $password);

// if(!$uppercase || !$lowercase || !$number || strlen($password) < 8 || strlen($password> 13)) {
//   echo "invalid password";
// }
// if(!preg_match("^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]^", $password))
// {
// 	echo "password is weak.";
// }
$dob=array($_POST['month'],$_POST['day'],$_POST['year']);
  // $age = (date("md", date("U", mktime(0, 0, 0, $dob[0], $dob[1], $dob[2]))) > date("md")
  //   ? ((date("Y") - $birthDate[2]) - 1)
  //   : (date("Y") - $birthDate[2]));
  $birthDate1= implode("/",$dob);
  $birthDate = explode("/", $birthDate1);

   $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
 // echo "Age is:" . $age;
  if ($age<13) {
   	echo "Sorry, You are age is below 13<br>";
   	$val=false;
   }
  
 
   return $val;
}


if(validate())
{


	$c=mysqli_connect('localhost','root','','form');
	if($c)
	{
		$query="insert into data(Fname,Lname,Email,Password,Dob) values('$fname','$lname','$email','$password','$birthDate1');";
		mysqli_query($c,"$query");
		echo "success";
	}
	else
	{
		echo "not connected to db";
	}
}

?>