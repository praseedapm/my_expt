<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$a=12;
$b=35.99999;
$c="baabtra";
$d= TRUE; 
 ?>
 <h1>Conversion to integer</h1>
<?php
 $num_a= (int)$a;
 $num_b=(int)$b;
 $num_c=(int)$c;
 $num_d=(int)$d;
 ?>


<table border="1x" bgcolor="lightblue">
<tr>
	<th>Before conversion</th>
	<th>After conversion</th>
</tr>
<tr>
	<td><?php echo $a?></td>
	<td><?php echo $num_a?></td>

</tr>
	<tr>
	<td><?php echo $b?></td>
	<td><?php echo $num_b?></td>

</tr>
<tr>
	<td><?php echo $c?></td>
	<td><?php echo $num_c?></td>

</tr>
<tr>
	<td><?php echo $d?></td>
	<td><?php echo $num_d?></td>

</tr>

</table>

<h1>Conversion to string</h1>
<?php
 $str_a= (string)$a;
 $str_b=(string)$b;
 $str_c=(string)$c;
 $str_d=(string)$d;
 ?>


<table border="1x" bgcolor="lightblue">
<tr>
	<th>Before conversion</th>
	<th>After conversion</th>
</tr>
<tr>
	<td><?php echo $a?></td>
	<td><?php echo $str_a?></td>

</tr>
	<tr>
	<td><?php echo $b?></td>
	<td><?php echo $str_b?></td>

</tr>
<tr>
	<td><?php echo $c?></td>
	<td><?php echo $str_c?></td>

</tr>
<tr>
	<td><?php echo $d?></td>
	<td><?php echo $str_d?></td>

</tr>

</table>

<h1>Conversion to boolean</h1>
<?php
 $bool_a= (boolean)$a;
 $bool_b=(boolean)$b;
 $bool_c=(boolean)$c;
 $bool_d=(boolean)$d;
 ?>


<table border="1x" bgcolor="lightblue">
<tr>
	<th>Before conversion</th>
	<th>After conversion</th>
</tr>
<tr>
	<td><?php echo $a?></td>
	<td><?php echo $bool_a?></td>

</tr>
	<tr>
	<td><?php echo $b?></td>
	<td><?php echo $bool_b?></td>

</tr>
<tr>
	<td><?php echo $c?></td>
	<td><?php echo $bool_c?></td>

</tr>
<tr>
	<td><?php echo $d?></td>
	<td><?php echo $bool_d?></td>

</tr>

</table>


</body>
</html>