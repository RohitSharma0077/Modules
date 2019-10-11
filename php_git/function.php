<!DOCTYPE html>

<?php
session_start();
if(!isset($_SESSION['usermail']))
{
    header("location:login.php");
}
?>

<html>
<head>
	<title>functions</title>

</head>
<html>
<body>
<a href="datetime.php">click</a>
<br>


<?php
function add($a,$b)

{

    $c=$a+$b;
    return $c; 
}
$addition=add(10,20);
echo $addition."<br>";

function call_v(&$r)                    // reference reflect on both ........value donot reflect
{

$r=20;
echo "$r <br>";
return $r;
}
$r=10;
call_v($r);
echo "$r";



?>
</html>
</body>
</html>