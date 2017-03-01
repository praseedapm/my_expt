<!DOCTYPE html>
<html>
<head>
 <?php
    $this->load->helper('url');
     ?>
	<title></title>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url()."css/fbnew.css";?>>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="main">
<div class="container-fluid">
	<div class="row">
<div class="d1" >
<div class="di1 col-xs-12 col-sm-12 col-lg-6 col-md-6">
	<img src=<?php echo base_url()."images/facebook.jpg";?> class="img">
</div>
<div class="di2 col-xs-12 col-sm-12 col-lg-6 col-md-6 col-sm-offset-0 col-xs-offset-0">
<form class="formlogin" method="POST" action=<?php echo base_url()."index.php/Logincontroller/login";?>>
	<input type="text" name="email" class="t1 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-sm-offset-0 col-xs-offset-0" placeholder="Email">
	<input type="password" name="password" class="t2 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-sm-offset-0 col-xs-offset-0" placeholder="Password">
	<input type="submit" name="" value="Login" class="btnlogin col-lg-2 col-md-2 col-sm-12 col-xs-12 col-sm-offset-0 col-xs-offset-0">
</form>
</div>

</div><br>
</div>

<div class="row">
<div class="d2">
<div class="di3 hidden-xs hidden-sm">
<p class="txt1">
 Connect with friends and the world <br>
 around you on Facebook.</p>
<br>
 <p class="txt2">

 See photos and updates from friends in News Feed.<br><br>
 Share what's new in your life on your Timeline.<br><br>
 Find more of what you're looking for with Graph Search.<br><br>

 <img src=<?php echo base_url()."images/fb.jpg";?>>
	</p>
	</div>

<div class="di4 hidden-sm hidden-xs">


<form class="formsignup" method="POST" action="test.php">
	<p class="signup" align="center" >Sign Up</p>
	<p align="center" class="txt4">It's free and always will be.</p>
		<input type="text" name="fname" placeholder="FirstName" class="txtfname">   
		<input type="text" name="lname" placeholder="LastName" class="txtlname"><br><br>
		<input type="text" name="mobile" placeholder="Mobile Number" class="txtm" minlength="10" maxlength="10"><br><br>
		<input type="text" name="email" placeholder="Email" class="txtm"><br><br>
		<input type="password" name="password" placeholder="Password" class="txtm" ><br><br>
		<span style="font-weight: bold">GENDER :</span><input type="radio" name="r1" value="male" id="r1" >  male  <input type="radio" name="r1" value="female" id="r2">  female  </p>
		<p style="font-weight: bold" >Date OF Birth:</p>
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
		<p class="txt3">
		By clicking Sign Up, you agree to our Terms and that you have read our Data Use Policy,<br> including our Cookie Use.</p>
		<input type="submit"  value="Sign Up Now!" class="btnsignup">
	</form>

</div>
<div class="hidden-lg hidden-md">
<input type="submit"  value="Create New Account" class="btnnewsignup"><br><br>
&nbsp;&nbsp;&nbsp;<a href="#">Forgotten Password?</a>&nbsp;&nbsp;. <a href="#">Help Centre</a><br><br><br>
<div>
  <img src=<?php echo base_url()."images/footer2.png";?> class="img-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12">
</div>
</div>
</div>
</div>


</div>
</div>
</body>
</html>
