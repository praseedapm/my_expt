<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
<?php $this->load->helper('url');?>
</head>
<body>
<?php
foreach ($data as $key => $value) {
$id= $value['id'];
$name= $value['name'];
$phone=$value['phone'];
$email=$value['email'];
$gender=$value['gender'];
$hobbies=$value['hobbies'];
$hob=explode(',', $hobbies);
$country=$value['country'];

}
?>

<form name="f1" method="POST" action="<?php echo base_url()."index.php/c1/update" ?>">
<input type="text" name="id" hidden="hidden" value="<?php echo $id;?>"></td></tr>
Name
<input type="text" name="name" value="<?php echo $name; ?>"><br><br>Phone
<input type="text" name="phone" value="<?php echo $phone;?>"><br><br>Email
<input type="text" name="email" value="<?php echo $email;?>"><br><br>Gender
<input type="radio" name="gender" value="male"
<?php
if($gender=="male")
{
 ?>
 checked
 <?php 
}
?>
>Male

<input type="radio" name="gender" value="female" <?php if($gender=="female")
{
?> checked
<?php } ?>
>Female
<br><br>
Hobbies
<input type="checkbox" name="hobbies[]" value="listening to music" <?php if(in_array("listening to music", $hob))
{
	?>
 checked
<?php 
}
?>
 >Listening to music<br>
<input type="checkbox" name="hobbies[]" value="reading" <?php if(in_array("reading", $hob))
{
	?>
 checked
<?php 
}
?>>Reading<br>
<input type="checkbox" name="hobbies[]" value="browsing" <?php if(in_array("browsing", $hob))
{
	?>
 checked
<?php 
}
?>>Browsing<br>
<input type="checkbox" name="hobbies[]" value="playing" <?php if(in_array("playing", $hob))
{
	?>
 checked
<?php 
}
?>>Playing<br><br><br>
Profile pic 
<input type="file" name="pic"><br><br>
Country
<select name="country">
	<option value="India"
<?php if($country=="India")
{
	?>
	selected
	<?php
}
?>
	>India</option>
	<option value="USA"
	<?php if($country=="USA")
{
	?>
	selected
	<?php
}
?>>USA</option>
	<option value="China"
	<?php if($country=="China")
{
	?>
	selected
	<?php
}
?>>China</option>
	<option value="England"
	<?php if($country=="England")
{
	?>
	selected
	<?php
}
?>>England</option>
	<option value="Russia" <?php if($country=="Russia")
{
	?>
	selected
	<?php
}
?>>Russia</option>
	<option value="Other"
	<?php if($country=="Other")
{
	?>
	selected
	<?php
}
?>>Other</option>
</select><br><br>
<input type="submit" name="" value="Save" >

</form>
</div>



</body>
</html>