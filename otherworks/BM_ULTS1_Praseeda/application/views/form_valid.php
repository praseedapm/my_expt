<!DOCTYPE html>
<html>
<head>
 <?php
    $this->load->helper('url');
     ?>
	<title>Form</title>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url()."css/form.css";?>>
   
</head>
<body>

<div class="fb col-sm-4">
<img class="img1" src="<?php echo base_url()."images/facebook4.jpg";?>">
</div>
<div class= "total col-sm-4">
<div class= "fb1 col-sm-4">
<img class="img2" src=<?php echo base_url()."images/fb1.jpg";?>>


<form class="formlogin" method="POST" action=<?php echo base_url()."index.php/Login_Controller/login";?>>
    <input type="text" name="username" placeholder="username" style="padding-right:10px; "> 
  
  <div style=" padding-top: 5px;">
<input type="password" name="password" placeholder="password" style="padding-right:10px;"> 
  </div>
  <div style=" padding-top: 5px;">
<input type="submit" name="btn" class="btn-primary" value="LOGIN">
  </div>
</form>
</div>
<div class="fb2">
<form class="formsignup" method="POST" action="test.php"><br><br>
<h2> Sign up </h2>
<input type="text" name="fname" placeholder="FirstName"><br><br>
<input type="text" name="lname" placeholder="LastName"><br><br>
<input type="text" name="email" placeholder="email"><br><br>
<input type="text" name="mobile" placeholder="Mobile Number" minlength="10" maxlength="10"><br><br>
<input type="password" name="password" placeholder="password"><br><br>
Date OF Birth:<br>
Day:
<select name="day">
	
    <?php for ($i = 1; $i <= 31; $i++) : ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    <?php endfor; ?>

</select>
Month:
<select name="month">
    <option value=''>--Select Month--</option>
    <option selected value='1'>Janaury</option>
    <option value='2'>February</option>
    <option value='3'>March</option>
    <option value='4'>April</option>
    <option value='5'>May</option>
    <option value='6'>June</option>
    <option value='7'>July</option>
    <option value='8'>August</option>
    <option value='9'>September</option>
    <option value='10'>October</option>
    <option value='11'>November</option>
    <option value='12'>December</option>

</select>
Year:
<select name="year">
	
    <?php for ($i = 1950; $i <= 2017; $i++) : ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    <?php endfor; ?>

</select><br><br>
<input type="submit" name="" value="submit">
</form>
</div>
<br><br>


</body>
</html>