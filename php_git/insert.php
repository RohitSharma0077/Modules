<?php
$servername="127.0.0.1";
$username="root";
$pass="";

$conn=mysqli_connect($servername,$username,$pass,"classdb");
// $sql="insert into  tb2 values(1161,'mohit')";
// mysqli_query($conn,$sql) or die("error".mysqli_error($conn));
//$sql="select count(id) as a from tb2 ";
//$sql="select fname from tb2 where fname like 'm%'";
// $result=mysqli_query($conn,$sql);
// $row=mysqli_fetch_array($result);
 //while ($row=mysqli_fetch_array($result)) {

 //	echo "name with m are :".$row["fname"];
 	// echo $row['a'];
 	// echo "<br>";
 	# code...
 //}

 $sql="select id, fname from tb2 ";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($result)) {

echo "<br>id :".$row["id"] ."<br>fname : ".$row["fname"];

}

?>

