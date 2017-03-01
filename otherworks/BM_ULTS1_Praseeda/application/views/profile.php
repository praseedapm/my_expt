<!DOCTYPE html>
<html>
<head>
 <?php
    $this->load->helper('url');
     ?>
	<title></title>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url()."css/profile.css";?>>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">

	<div class="row">
<div class="div1 col-xs-8 col-sm-8 col-lg-12 col-md-12">
<div class="a1 col-lg-8 col-md-8">
	<img class="imglogo img-rounded" src=<?php echo base_url()."images/fblogo.png";?> >
	<input type="text" name="search" placeholder="search facebook" class="search">
	<button class="sbt"><span class="glyphicon glyphicon-search" style="background-color: #fff;padding: 2px;"></span></button>

</div>
<div class="a2 col-lg-4 col-md-4">
	<img src="<?php echo $pic;?>" style="width: 30px; height: 30px;" style="padding: 0px;">&nbsp;&nbsp;<span style="color: #F6F8FA;font-weight: bold;font-family: arial"><?php echo $fname;?></span>
</div>
</div>
</div>
<div class="row">
<div class="div2 col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="d1 col-lg-2 col-md-2 hidden-xs hidden-sm">
<img src="<?php echo $pic;?>" style="width: 30px; height: 30px;" style="padding: 0px;">&nbsp;&nbsp;<?php echo $fname;?>&nbsp;
  <?php echo $lname;?><br><br>
  <img src=<?php echo base_url()."images/status.jpg"?> class="edit-icon"> &nbsp; Edit Profile
  </div>
  <div class="d2 col-lg-7 col-md-7">
  <img src=<?php echo base_url()."images/status.jpg"?>><span style="font-weight: bold;font-size: 15px;color: #0196CE">Update Status</span>&nbsp; &nbsp; &nbsp;  <span style="font-weight: bold;font-size: 15px;color: #0196CE"><img src=<?php echo base_url()."images/photo.jpg"?>>Add Photos/Video </span> &nbsp;&nbsp;&nbsp;<span style="font-weight: bold;font-size: 15px;color: #0196CE"><img style="height: 20px;width: 20px;" src=<?php echo base_url()."images/note2.png"?>> &nbsp;Write Note</span><hr>
  <img src="<?php echo $pic;?>" style="width: 50px; height: 50px;" style="padding: 0px;">&nbsp;&nbsp; <span style="color: #B4C1C0">What's on your mind?</span>
  </div>
  <div class="d3 col-lg-3 col-md-3">
  	<span style="color: #5C6665;font-size: 17px;">YOUR ADS</span>
<span style="margin-left: 180px;color: grey">  &#9660;</span><hr>
  <div class="row">
  <div class="kj col-lg-offset-9 col-md-offset-9 col-lg-3 col-md-3 hidden-sm hidden-xs">
  </div>
</div>
<div class="row">
<div class="div3 col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="d4 col-lg-offset-2 col-md-offset-2 col-lg-7 col-md-7"></div>


</div>
</div>
</body>
</html>
