<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."css/a.css"?>">
</head>
<body>
<?php
$this->load->helper('url');
 ?>
<div class="div" style="width: 100%;border: 1px solid black";> 
<h1 align="center">Add Employee</h1>

<form name="f1" method="POST" action="<?php echo base_url()."index.php/c1/insert" ?>">
Name
<input type="text" name="name" placeholder="Name"><br><br>Phone
<input type="text" name="phone" placeholder="Phone"><br><br>Email
<input type="text" name="email" placeholder="Email"><br><br>Gender
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
<br><br>
>Hobbies<div class="hobbies">
<input type="checkbox" name="hobbies[]" value="listening to music">Listening to music<br>
<input type="checkbox" name="hobbies[]" value="reading">Reading<br>
<input type="checkbox" name="hobbies[]" value="browsing">Browsing<br>
<input type="checkbox" name="hobbies[]" value="playing">Playing<br><br><br></div>
Profile pic 
<input type="file" name="pic"><br><br>
Country
<select name="country">
	<option value="India">India</option>
	<option value="USA">USA</option>
	<option value="China">China</option>
	<option value="England">England</option>
	<option value="Russia">Russia</option>
	<option value="Other">Other</option>
</select><br><br>
<input type="submit" name="" value="Save" >
</form>
</div>
<div class="div" style="width: 100%;">

<table border="1px;">
	<tr>
		<th>Sl No</th>
		
		<th>Name</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Action</th>
	</tr>
<?php 
foreach ($data as $value) {
	
?>
	<tr><td><?php echo $value['id']; ?></td>
	<td> <?php echo $value['name']; ?></td>
	<td> <?php echo $value['phone']; ?></td>
	<td> <?php echo $value['email']; ?></td>
	<td><a href=<?php echo site_url('c1/edit')?>?id=<?php echo $value['id'] ?>>Edit</a> &nbsp;
	<a href=<?php echo site_url('c1/delete')?>?id=<?php echo $value['id'] ?>>Delete</a>
	</td> </tr>
 <?php
} ?>
</table>


</body>
</html>