<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->helper('url');?>
</head>
<body>

	<?php
foreach ($data as $key => $n) {

$id=$n['id'] ;
$name= $n['name'] ;
$phone= $n['phone'] ;
$email= $n['email'];
$gender=$n['gender'];
$hobby= $n['hobby'];
$hob=explode(',',$hobby);
$country= $n['country'];
	}
	
	?>


<form method="post" action=<?php echo base_url()."index.php/Welcome/update";?>>
<h1>Add employee</h1>

	<table>
	<tr><td><input type="text" name="id" hidden="hidden" value="<?php echo $id;?>"></td></tr>
		<tr><td>Name</td><td><input type="text" name="name" id="name" placeholder="name" value="<?php echo $name;?>"></td></tr>
		<tr><td>Phone</td><td><input type="text" name="phone" id="phone" maxlength="10" placeholder="phone number" value="<?php echo $phone;?>"></td></tr>
		<tr><td>Email</td><td><input type="text" name="email" id="email" placeholder="email" value="<?php echo $email;?>"></td></tr>
		<tr><td>Gender</td><td><input type="radio" name="gender" value="male"  <?php
      if($gender=='male')
        {
          ?>
          checked
          <?php
        }
          ?>>male<input type="radio" name="gender" value="female"  <?php
      if($gender=='female')
        {
          ?>
          checked
          <?php
        }
          ?>>female</td></tr>
		<tr><td>Hobbies</td><td><input type="checkbox" name="hobby[]" value="music" <?php
       if($hob!="")
        {
          if (in_array("music", $hob)) 
           {
            echo "checked";
          
          }
        }
     ?>>Listening to music
		<input type="checkbox" name="hobby[]" value="reading" id="c2">reading<input type="checkbox" name="hobby[]" value="browsing" id="c3" <?php
       if($hob!="")
        {
          if (in_array("browsing", $hob)) 
           {
            echo "checked";
          
          }
        }
     ?>>browsing
		<input type="checkbox" name="hobby[]" value="playing" id="c4" <?php
       if($ho!="")
        {
          if (in_array("playing", $hob)) 
           {
            echo "checked";
          
          }
        }
     ?>>playing</td></tr>
		<tr><td>Profile pic</td><td><input type="file" name="pic" id="pic"></td></tr>
		<tr><td>country</td>
		<td>
		<select name="country">
			<option value="India"<?php
       if($country=="India")
       {
        ?>
        selected
        <?php
       }
       ?>>India</option>
			<option value="USA" <?php
       if($country=="USA")
       {
        ?>
        selected
        <?php
       }
       ?>>usa</option>
			<option value="china" <?php
       if($c=="china")
       {
        ?>
        selected
        <?php
       }
       ?>>china</option>
        <option value="England" <?php
       if($country=="England")
       {
        ?>
        selected
        <?php
       }
       ?>>England</option>
        <option value="Russia" <?php
       if($c=="Russia")
       {
        ?>
        selected
        <?php
       }
       ?>>Russia</option>
        <option value="other" <?php
       if($c=="other")
       {
        ?>
        selected
        <?php
       }
       ?>>other</option>
       
		</select></td></tr>
		<tr><td></td><td><input type="submit" name="btn" value="update"></td></tr>
	</table>
</form>

</body>
</html>