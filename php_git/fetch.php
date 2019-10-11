
<!DOCTYPE html>
<html>
<head>
	<title>fetch</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		table
		{

		}
	</style>
</head>
<body>
		<?php
			error_reporting(0);
		extract($_POST);
	//connecting to database database name = "new"
$connect = mysqli_connect("localhost","root","","demo") or die("error in Establishing connection");
	
	//create table in database;name ="new1"
	//$sql = "select * from new2 where name like '$first_char%'";
	if(isset($_POST['button']))
	{
		$sql = "select $button(sal) as a from emp";
		$result =mysqli_query($connect,$sql) or die("Error in inserting data:".mysqli_error($connect));
		$row = mysqli_fetch_array($result);
		echo $row['a'];
	}
	if(isset($_POST['button1']))
	{
		$sql = "select * from emp where sal>30000";
		$result =mysqli_query($connect,$sql) or die("Error in inserting data:".mysqli_error($connect));
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr><td>id:".$row['id']."</td><td> name:".$row['name']."</td><td>detp:".
			$row['deptname']."</td><td>salary:".
			$row['sal']."</td></tr>";
		}
	}
	if(isset($_POST['deptsal']))
	{
		$sql = "select deptname,sum(sal) as totalSalary from emp group by deptname";
		$result =mysqli_query($connect,$sql) or die("Error in inserting data:".mysqli_error($connect));
		echo "<table border='2'><tr><th colspan='2'><center>DepartmentData</center></th></tr>
		<tr><th>Department Name</th><th>Total salary</th></tr>";
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr><td>".$row['deptname']."</td><td>".$row['totalSalary']."</td></tr>";
		}
		echo "</table>";
	}
	if(isset($_POST['deptemp']))
	{
		$sql = "select deptname,count(name) as totalEmployee from emp group by deptname";
		$result =mysqli_query($connect,$sql) or die("Error in inserting data:".mysqli_error($connect));
		echo "<table border='2'><tr><th colspan='2'><center>DepartmentEmpData</center></th></tr>
		<tr><th>Department Name</th><th>Total Employee</th></tr>";
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr><td>".$row['deptname']."</td><td>".$row['totalEmployee']."</td></tr>";
		}
		echo "</table>";
	}
	if(isset($_POST['deptempclerk']))
	{
		$sql = "select name from emp where deptno=1 and deptname='eng.'";
		$result =mysqli_query($connect,$sql) or die("Error in inserting data:".mysqli_error($connect));
		echo "<table border='2'><tr><th colspan='2'><center>working in cse AS a cleark</center></th></tr>
		<tr><th>Employee Name</th></tr>";
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr><td>".$row['name']."</td></tr>";
		}
		echo "</table>";
	}
	if(isset($_POST['sla50000']))
	{
		$sql = "select deptno,max(sal),deptname from emp group by deptname having max(sal)>50;";
		$result =mysqli_query($connect,$sql) or die("Error in inserting data:".mysqli_error($connect));
		echo "<table border='2'><tr><th colspan='3'><center>sal>50000</center></th></tr>
		<tr><th>deptno.</th><th>max(sal)</th><th>deptname</th></tr>";
		while($row = mysqli_fetch_array($result))
		{
		echo "<tr><td>".$row['deptno']."</td><td>".$row['max(sal)']."</td><td>".$row['deptname']."</td></tr>";
		}
		echo "</table>";
	}
	if(isset($_POST['like']))
		echo "<table border='2' class='table'>
		<tr>
			<th colspan='4'><center>DATA</center></th>
		</tr>";
	{
		$sql = "select * from emp where name like '$first_char%'";
		$result =mysqli_query($connect,$sql) or die("Error in inserting data:".mysqli_error($connect));
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr><td>id:".$row['id']."</td><td> name:".$row['name']."</td><td>detp:".
				$row['deptname']."</td><td>salary:".
				$row['sal']."</td></tr>";
			}
	}
	echo "</table>";
?>

</table>
</body>
</html>