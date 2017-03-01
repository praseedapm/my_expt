<?php

function valid()
{
$validd=true;
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mobile=$_POST['number'];
$email=$_POST['email'];
$password=$_POST['password'];

$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];


if($fname=="" && $lname=="")
{
echo "Name is mandatory"."<br>";
$validd=false;
}
else if($fname=="")
{
echo "First name is mandatory"."<br>";
$validd=false;
}

else if($lname=="")
{
echo "Last name is mandatory"."<br>";
$validd=false;
}
else if (!preg_match('/^[a-zA-Z]/',$fname))
                {
                echo "Invalid first name"."<br>";
                $validd=false;
                }
else if(!preg_match('/^[a-zA-Z]/',$lname))
{
echo "Invalid last name"."<br>";
$validd=false;
}
else if(strlen($fname)<3)
{
echo "First name should be minimum 3 letters"."<br>";
$validd=false;
}
else 
{
echo "Name validation success"."<br>";
}
if($mobile=="")
{
echo "Mobile should be mandatory"."<br>";
$validd=false;
}
else if(!preg_match('/[7-9]{1}[0-9]{9}/',$mobile))
{
echo "Invalid mobile number"."<br>";
$validd=false;
}
else if(strlen($mobile)<10)
{
echo "Mobile number should be 10 digits"."<br>";
$validd=false;
}
if($email=="")
{
echo "Email is mandatory"."<br>";
$validd=false;
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo "Valid email address"."<br>";
} else {
  echo "Not a valid email address"."<br>";
$validd=false;
}
if($password=="")
{
echo "Password is mandatory"."<br>";
$validd=false;
}
else if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,10}/',$password))
{
echo "Invalid password"."<br>";

$validd=false;}
else
{
echo "Password accepted"."<br>";
}
if($day==0 || $month==0 || $year==0)
{
echo "Date of birth is mandatory"."<br>";
}
else 
{
$yr=date("Y");
$ydiff=$yr-$year;
if($ydiff<13)
{
echo "You are minor.So please leave"."<br>";
$validd=false;
}
else
{
echo "Date of birth validated"."<br>";
}}
if(!isset($_POST['r'])){ 
       echo "Select gender"."<br>";
       $validd=false;
    }
    else 
    {
    echo "Gender accepted"."<br>";
    }
    return $validd;
    }

// if(valid())
// {
if(valid()==true)
{
  $fname=$_POST['fname'];
$lname=$_POST['lname'];
$mobile=$_POST['number'];
$email=$_POST['email'];
$password=$_POST['password'];

$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$gender=$_POST['r'];

  $con=mysqli_connect('127.0.0.1','root','','student')or die("error in connection");
  $query="insert into fb(fname,lname,mobile,email,password,day,month,year,gender)VALUES('$fname','$lname','$mobile','$email','$password','$day','$month','$year','$gender')";
  // $query="INSERT INTO fb(fname,lname,mobile,email,password,day,month,year,gender) VALUES('$fname',$lname','$mobile','$email','$password','$day','$month','$year','$gender')";
  mysqli_query($con,$query)or die("error in insertion");
  // if(mysqli_query($con,$query))
  // {
  //   echo "succesfully inserted";
  // }

// $query="insert into rgstr(name,pass,gender,place,age,quali,district,address) values('$name','$pass','$gender','$place','$age','$aa','$dst','$add')";


  // $query=mysqli_query("INSERT INTO fb(fname,lname,number,email,password,day,mont,year,gender")VALUES('$fname','$lname','$number','$email','$password','$day','$month','$year'))";
}
// else
// {
//   echo "Cannot insert";
// }



?>