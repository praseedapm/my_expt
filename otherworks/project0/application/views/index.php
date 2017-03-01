<html>
	<head>
		<title>form</title>
        <center><h1>Add Employee</h1></center>
    </head>
	
    <body>
		<form action=" <?php echo site_url('c1/insert'); ?>" method="post">
        	Name
<input type="text" name="name" placeholder="Name"><br><br>Phone
<input type="text" name="phone" placeholder="Phone"><br><br>Email
<input type="text" name="email" placeholder="Email"><br><br>Gender
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
<br><br>

                
                    	<input type="submit" value="submit" name="submit" >
            
        </form>
    </body>
</html>


























