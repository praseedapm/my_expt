
<!DOCTYPE html>
<html>
<body>
<form method="post" action="eg1.php">
<input type="text" name="abc">
<input type="submit" name="button" value="submit">
<?php
function abc()
{
$favcolor = $_POST['abc'];
echo $favcolor;
// switch ($favcolor) {
//     case "red":
//         echo "Your favorite color is red!";
//         break;
//     case "blue":
//         echo "Your favorite color is blue!";
//         break;
//     case "green":
//         echo "Your favorite color is green!";
//         break;
//     default:
//         echo "Your favorite color is neither red, blue, nor green!";
// }
}
if (isset($_POST['submit'])) {
abc();
  }

 ?>
 </form>
</body>
</html>
