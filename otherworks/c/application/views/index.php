<html>
	<head>
		<title>Insert</title>
        <center><h1>Insert,Update,Delete</h1></center>
    </head>
	
    <body>
		<form action=" <?php echo site_url('Student/insertdata'); ?>" method="post">
        	<center><table border="2">
            	<tr>
                	<td>StudentName:</td>
					<td>
						<input type="text" name="name" />
                    </td>
                </tr>
                <tr>
                	<td>Email:</td>
					<td>
						<input type="text" name="email" />
                    </td>
                </tr>
                <tr>
                	<td>Phone:</td>
					<td>
						<input type="text" name="phone" />
                    </td>
                    
                </tr>
                <tr>
                	<td colspan="2">
                    	<center><input type="submit" value="submit" name="submit" /></center>
                    </td>
                </tr>
            </table></center>
            <center><table border="2">
            <thead>
            	<th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>ACTION</th>
                
            </thead>
            <tbody>
					<?php 
						foreach($this->StudentModel->viewdata() as $row)
						{
							echo "<tr>
								<td> $row->id </td>
								<td> $row->name </td>
								<td> $row->email </td>
								<td> $row->phone </td>
                                <td><a href='".site_url('Student/edit/'.$row->id)."'>Edit</a> | <a href='".site_url('Student/delete/'.$row->id)."'>Delete</a></td>
								</tr>";
                    
						}
					
					?>
            </tbody>
            </table></center>
        </form>
    </body>
</html>