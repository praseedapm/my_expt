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
  <style type="text/css">
    input[type=text]
    {
      margin-left: 18px;
      box-sizing: border-box;
      border:2px solid red;
    }
  </style>
  </head>
<body>
<div class="container-fluid">
  <div class="row">

<div class="dx1 col-xs-12 col-sm-12 col-lg-12 col-md-12">
  <img src=<?php echo base_url()."images/facebook.jpg";?> class="img">

  <button class="btn-signup" type="submit" name="signup" value="SIGNUP">Sign up</button>
  </div>

  </div>


  </div>
  </div>
  
   <div class="row az" style="height:400px;">
   <div class="col-md-12 col-lg-12 col-md-offset-0 col-lg-offset-0  azx">
    
   </div>
   <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12  col-xs-offset-0 col-sm-offset-0 azy">
     <h3>Facebook Login</h3>
     <hr>

   <div class="logbox col-xs-offset-0 col-sm-offset-1 col-lg-offset-1 col-md-offset-1">
    <form method="POST" action="<?php echo base_url()."index.php/Logincontroller/login";?>">
<span style="font-weight: bold;">Email or Phone:<input type="text" name="email" ><span style="color: red;font-size: 23px;">&#9888;</span>
<br><br>
 <span style="font-weight: bold;">Password:&nbsp;<input type="password" name="password" style="margin-left: 50px;"><br><br>
<input type="checkbox" name="checkbox" checked="checked" style="margin-left: 120px;">Keep me logged in<br>
<input type="submit" name="btn" class="btn-login" value="LOGIN" style="margin-left: 120px;">&nbsp;or &nbsp;<span style="color: #2457BE;font-weight: bold;">Signup for facebook</span>
<br>
</form>

<a href="#" style="margin-left: 190px;">Forgotten password?</a>
</div>
</div>
      
    
    </div>
 
   </div>
   <div class="row n">
   <div class="col-md-12 col-lg-12 col-md-offset-0 col-lg-offset-0 hidden-xs hidden-sm r2">
    
   </div>
   <div>
  <img class="img-responsive" src=<?php echo base_url()."images/footer.png";?>>
</div>
    
    </div>
 
   </div>
</div>  
</body>
</html>