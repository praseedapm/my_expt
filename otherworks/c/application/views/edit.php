<html>
	<head>
		<title>Insert</title>
        <center><h1>Insert,Update,Delete</h1></center>
    </head>
	
    <body>
		<form action=" <?php echo site_url('Student/update'); ?>" method="post">
        	<center><table border="2">
            	<tr>
                	<td>ID:</td>
					<td>
						<input type="text" name="id" value="<?php echo $r->id;?>" />
                    </td>
                </tr>
            	<tr>
                	<td>StudentName:</td>
					<td>
						<input type="text" name="name" value="<?php echo $r->name;?>" />
                    </td>
                </tr>
                <tr>
                	<td>Email:</td>
					<td>
						<input type="text" name="email" value="<?php echo $r->email;?>" />
                    </td>
                </tr>
                <tr>
                	<td>Phone:</td>
					<td>
						<input type="text" name="phone" value="<?php echo $r->phone;?>"/>
                    </td>
                    
                </tr>
                <tr>
                	<td colspan="2">
                    	<center><input type="submit" value="submit" name="submit" /></center>
                    </td>
                </tr>
            </table></center>
            
        </form>
    </body>
</html>