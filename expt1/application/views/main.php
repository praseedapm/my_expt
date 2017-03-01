<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<form method="POST" action=<?php echo base_url()."index.php/c1/insert"?>>
<h2>Register</h2>
	Name: <input type="text" name="name"><br><br>
	Age: <input type="text" name="age"><br><br>
	Email: <input type="text" name="email"><br><br>
	Password:<input type="text" name="password"><br><br>
	<input type="submit" name="" value="submit"><br><br>

</form>

<br><br><br><br>

<form method="POST" action=<?php echo base_url()."index.php/c1/logincheck"?>>
<h2>Log in</h2>
Username: <input type="text" name="uname" ><br><br>
Password: <input type="text" name="pword"><br><br>
UserType: <select name="utype">
	<option>User</option>
	<option>Admin</option>
</select><br><br>
<input type="text" name="id" hidden="hidden" value=<?php //echo $id?>><br>
<input type="submit" name="" value="submit">

</form><br><br>
<table border="1px" >
	<th>Id</th>
	<th>Name</th>
	<th>Age</th>
	<th>Email</th>
	<th>action</th>

<?php 
 foreach ($data as $value) {
 	$name=$value['name'];
 	$age=$value['age'];
 	$email=$value['email'];
  	$password=$value['password'];
  	$id=$value['id'];
  
?>



<tr>
	<td><?php echo $id?></td>
	<td><?php echo $name?></td>
	<td><?php echo $age?></td>
	<td><?php echo $email?></td>
	<td> <a href=<?php echo base_url()."index.php/c1/edit"?>?id=<?php echo $id?>>Edit</a> or <a href=<?php echo base_url()."index.php/c1/delete"?>?id=<?php echo $id?>>Delete</a>
</tr>
	<?php  	} ?>

</table>
</body>
</html>