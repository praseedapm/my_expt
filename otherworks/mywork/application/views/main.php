<!DOCTYPE html>
<html>
<head>
	<title>Register here</title>
</head>
<body>
<h1>Register</h1>
<form method="POST" action=<?php echo base_url()."index.php/c1/insert"?>>
Name: <input type="text" name="name"><br><br>
Age: <input type="age" name="age"><br><br>
Email: <input type="email" name="email"><br><br>
Password: <input type="password" name="password"><br><br>
<input type="submit" name="submit" value="Submit"><br><br><br>
</form>
<h2> Users Data Table</h2>
<table border="2px solid blue">
	<th>Id</th>
	<th>Name</th>
	<th>Age</th>
	<th>Email</th>
	<th>Action</th>
	

<?php 
foreach ($data as $key => $value) {
?>
<tr>
<td><?php echo $value['id']?></td>
<td><?php echo $value['name']?></td>
<td><?php echo $value['age']?></td>
<td><?php echo $value['email']?></td>
<td><a href=<?php echo base_url()."index.php/c1/edit"?>?id=<?php echo $value['id']?>>Edit</a> or <a href=<?php echo base_url()."index.php/c1/delete"?>?id=<?php echo $value['id']?>>Delete</a></td>
</tr>
<?php
}
?></table>
</body>
</html>