<?php
$servername="127.0.0.1";
$username="root";
$pass="";

$conn=mysqli_connect($servername,$username,$pass,"classdb");
//$sql="select SUM(salary) as s,country from emp1 GROUP BY country";
//$sql="select max(salary) as s,country from emp1 GROUP BY country HAVING max(salary) > 1000 ";



//$sql="select max(salary)As Max from emp1";
 $result=mysqli_query($conn,$sql);

 while ($row=mysqli_fetch_array($result)) {

 	//echo "MAX salary:".$row["Max"];
 	//echo "<br>Total salary:" .$row["s"] . "    "  .  "name :" .$row["country"] ;
 	//echo "<br>max sal:" .$row["s"] ."  ". "country :" .$row["country"];
 }
