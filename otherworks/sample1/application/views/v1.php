<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->helper('url');?>
</head>
<body>
<form method="post" action=<?php echo base_url()."index.php/c1/insert";?>>
<h1>Add employee</h1>
	<table>
		<tr><td>Name</td><td><input type="text" name="name" id="name" placeholder="name"></td></tr>
		<tr><td>Phone</td><td><input type="text" name="phone" id="phone" maxlength="10" placeholder="phone number"></td></tr>
		<tr><td>Email</td><td><input type="text" name="email" id="email" placeholder="email"></td></tr>
		<tr><td>Gender</td><td><input type="radio" name="gender" value="male" id="r1">male<input type="radio" name="gender" value="female" checked="true" >female</td></tr>
		<tr><td>Hobbies</td><td><input type="checkbox" name="hobby[]" value="music" >Listening to music
		<input type="checkbox" name="hobby[]" value="reading" >reading<input type="checkbox" name="hobby[]" value="browsing" id="c3">browsing
		<input type="checkbox" name="hobby[]" value="playing" id="c4">playing</td></tr>
		<tr><td>Profile pic</td><td><input type="file" name="pic" id="pic"></td></tr>
		<tr><td>country</td>
		<td>
		<select name="country">
	<option value="India">India</option>
	<option value="USA">USA</option>
	<option value="China">China</option>
	<option value="England">England</option>
	<option value="Russia">Russia</option>
	<option value="Other">Other</option>
		</select></td></tr>
		<tr><td></td><td><input type="submit" name="btn" value="Save"></td></tr>
	</table>
</form>
<table border="2">
	<tr><th>slno</th><th>name</th><th>phone</th><th>email</th><th>action</th></tr>
	<?php 
// if(isset($data))
// {
// 	print_r($data);
// }
	
foreach ($data as $key => $n) {
?>

<tr>
<td><?php echo $n['id'] ?></td>
<td><?php echo $n['name'] ?></td>
<td><?php echo $n['phone'] ?></td>
<td><?php echo $n['email'] ?></td>
<td><a href="<?php echo site_url('c1/edit');?>?id=<?php echo $n['id'];?>"><?php echo "edit";?></a></td>
<td><a href="<?php echo site_url('c1/delete');?>?id=<?php echo $n['id'];?>"><?php echo "delete";?></a></td>
</tr>

<?php
	}
	
	?>
</table>
</body>
</html>