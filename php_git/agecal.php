<?php
  if(isset($_POST['submit']))
        {
        	extract($_POST);
              $servername="127.0.0.1";
          $username="root";
             $pass="";
             $a=explode('/',$_POST['dob']);       //explode: convert string to array then add index
         	$b=explode('/',$_POST['today']);

       
         	$age=$b[0]-$a[0];

         echo"age is:".$age;

$conn=mysqli_connect($servername,$username,$pass,"rdatabase");
$sql="insert into calculate values('$dob','$today','$age')";
mysqli_query($conn,$sql) or die("error".mysqli_error($conn));

         

         
                        
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>age calculator</title>
</head>
<body>
<div>
 <h2><center>Age Calculator</center> </H2>
      <form method="POST" action="agecal.php">
          
         DOB:  <input type="date" name="dob" ><br>
         TODAY:<input type="date" name="today"><br><br>
         
         

          <input type="submit" value="Calculate"  name="submit">
          <br><br><br>
         
          
</div>

</body>
</html>