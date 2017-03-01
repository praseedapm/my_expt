<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

<?php
 echo $this->session->userdata('username');?><br><br>
<?php foreach ($data as $key => $value) {
	
	?>
Welcome <?php
echo $value['name'];
?><br>
Age is : <?php echo $value['age'];
}
?><br><br>

 <a href="<?php echo base_url()."index.php/c1/logout"?>">Logout</a>

</body>
</html>