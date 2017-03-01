<!DOCTYPE html>
<html>
<head>
  <title>fb</title>
<?php $this->load->helper('url');?>
	     <link rel="stylesheet" type="text/css" href=<?php echo base_url()."css/fbbt1.css";?>>
       <link rel="stylesheet" type="text/css" href=<?php echo base_url()."css/fbnew.css";?>>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
<body>
<div class="container-fluid">
  <div class="row">

<div class="dx1 col-xs-12 col-sm-12 col-lg-12 col-md-12">
  <img src=<?php echo base_url()."images/facebook.jpg";?> class="img">

  <button class="btn-signup" type="submit" name="signup" value="SIGNUP">Sign up</button>
  </div>

  </div>


  
   <div class="row az" style="height:400px;">
   <div class="col-md-12 col-lg-12 col-md-offset-0 col-lg-offset-0 azx">
    
   </div>
    <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12  col-xs-offset-0 col-sm-offset-0 azy">
     <h3>Facebook Login</h3>
     <hr>

   <div class="logbox col-xs-offset-0 col-sm-offset-0">
    <form method="POST" action="<?php echo base_url()."index.php/Logincontroller/login";?>">
  Login as:&nbsp; &nbsp;<img src="<?php echo $pic;?>" style="width: 50px; height: 50px;" style="padding: 0px;">&nbsp;&nbsp;<?php echo $fname;?>&nbsp;
  <?php echo $lname;?><br><br>
  <input type="text" name="email" hidden="hidden" value="<?php echo $uname;?>">
 Password:&nbsp;<input type="password" name="password" placeholder="password"><br>
<input type="checkbox" name="checkbox" checked="checked" style="margin-left: 70px;">Keep me logged in<br>
<input type="submit" name="btn" class="btn-login" value="LOGIN" style="margin-left: 70px;">&nbsp;or &nbsp;<span style="color: #2457BE;font-weight: bold;">Signup for facebook</span>
<br>
<a href="#" style="margin-left: 70px;">Forgotten password?</a>
</form>
</div>
</div>
      
    
    </div>
 
   </div>
   <div class="row n">
   <div class="col-md-12 col-lg-12 col-md-offset-0 col-lg-offset-0 hidden-xs hidden-sm r2">
    
   </div>
   <div>
  <img src=<?php echo base_url()."images/footer.png";?> class="img-responsive">
</div>
    
    </div>
 
   </div>
</div>  
</body>
</html>