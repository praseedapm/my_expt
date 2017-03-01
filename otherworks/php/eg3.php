

<?php
$n=1;
show($n);
function show($n)

{
if($n<=100)
{
echo $n." ";
return show($n+1);
}
//return $n * show($n-1); // <--calling itself.

}





?>
