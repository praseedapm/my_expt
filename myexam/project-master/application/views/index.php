<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<div class="div" style="width: 100%;border: 1px solid black; border-spacing: 15px;">
<?php $this->load->helper('form'); ?>
<h1 align="center">Add Employee</h1>
<?php echo form_open('c1/insert') ?>
<form name="f1" method="POST">
Name
<input type="text" name="name" placeholder="Name"><br><br>Phone
<input type="text" name="phone" placeholder="Phone"><br><br>Email
<input type="text" name="email" placeholder="Email"><br><br>Gender
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
<br><br>
Hobbies
<input type="checkbox" name="hobbies" value="listening to music">Listening to music<br>
<input type="checkbox" name="hobbies" value="reading">Reading<br>
<input type="checkbox" name="hobbies" value="browsing">Browsing<br>
<input type="checkbox" name="hobbies" value="playing">Playing<br><br><br>
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
<?php //foreach ($res as $data) {
	
?>
<table border="1px;">
	<tr>
		<th>Sl No</th>
		<th>Pic</th>
		<th>Name</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Action</th>
	</tr>

	<tr><td><<?php //echo $data['id']; ?></td>
	
	<td> <img src="<?php //echo $res['pic']; ?>"?></td>
	<td> <?php //echo $data['name']; ?></td>
	<td> <?php //echo $data['phone']; ?></td>
	<td> <?php //echo $data['email']; ?></td>
	<td><td>Edit</td><td>Delete</td> </td></tr>
</table> <?php
//} ?>

</body>
</html>