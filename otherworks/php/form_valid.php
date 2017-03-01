<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<form method="POST" action="test.php"><br><br>
<input type="text" name="fname" placeholder="FirstName"><br><br>
<input type="text" name="lname" placeholder="LastName"><br><br>
<input type="text" name="email" placeholder="email"><br><br>
<input type="text" name="mobile" placeholder="Mobile Number" minlength="10" maxlength="10"></td>
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

</body>
</html>