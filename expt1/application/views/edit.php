<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<?php 
foreach($abc as $key => $value) 
{
	$name=$value['name'];
 	$age=$value['age'];
 	$email=$value['email'];
  	$password=$value['password'];
  	$id=$value['id'];
?>

<form method="POST" action=<?php echo base_url()."index.php/c1/update"?>>
<h2>Register</h2>
<input type="text" name="id" value="<?php echo $id?>" hidden="hidden" >
	Name: <input type="text" name="name" value=<?php echo $name;?>><br><br>
	Age: <input type="text" name="age" value=<?php echo $age;?>><br><br>
	Email: <input type="text" name="email" value=<?php echo $email;?>><br><br>
	Password:<input type="text" name="password" value=<?php echo $password;?>><br><br>
	<input type="submit" name="" value="submit"><br><br>

</form>
<?php
}
?>
<br>

</body>
</html>