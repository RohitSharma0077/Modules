<!DOCTYPE html>
<html>
<head>
	<title>fetch</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		input
		{
			padding: 5px;
			font-size: 18px;
			font-family: sans-serif;
			background-color: #b3ddd1;
			border-radius: 5px;
			outline: none;
		}
	</style>
</head>
<body>
	<center><h1 style="position: relative;top: 50px;">Fetch details from emp table</h1></center>
<form style="position: absolute;top:50%;left:50%;transform: translate(-50%,-50%);background-color: #80beaf;padding: 30px;border-radius: 5px;" action="fetch.php" method="POST">



	<input type="text" style="border:none;border-bottom: 2px solid #333" name="first_char" placeholder="Enter First char"><input name="like" type="radio"><br>

	
	total employ:<input class=" from-group btn btn-lg btn-info" name="button" type="radio" value="count"><br>
	max-salary:<input class=" from-group btn btn-lg btn-info" name="button" type="radio" value="max"><br>
	min-salary:<input class=" from-group btn btn-lg btn-info" name="button" type="radio" value="min"><br>
	salary above 30000:<input class=" from-group btn btn-lg btn-info" name="button1" type="radio"><br>
	department wise salary data:<input type="radio" name="deptsal"><br>
	department wise total employee:<input type="radio" name="deptemp"><br>
	employee working in cse as clerk:<input type="radio" name="deptempclerk"><br>
	salary>50000:<input type="radio" name="sla50000"><br><hr>
	<input class="btn btn-lg btn-success" type="submit" value="fetch-data">
	<input style="position: absolute;right: 30px;" class="btn btn-lg btn-danger" type="reset" value="reset">
</form>
</body>
</html>