<?php
 if(isset($_POST['btn']))
    {
    	//extract($_POST);
    	if(!empty($_POST['save']))
    	{
    		setcookie("username",$_POST["uid"],time()+60);
    		setcookie("password",$_POST["pass"],time()+60);
    		echo "cookie set";
    	}else
		{
		
			echo "cookie not set";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>cookieForm</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		input[type="text"]
		{
			padding: 5px;
			font-size: 18px;
			font-family: sans-serif;
			background-color: #555!important;
			border-radius: 5px;
			outline: none;
			border:0;
			margin-bottom: 5px;
			color: #fff;
		}
		input[type="password"]
		{
			padding: 5px;
			font-size: 18px;
			font-family: sans-serif;
			background-color: #555!important;
			border-radius: 5px;
			outline: none;
			border:0;
			margin-bottom: 5px;
			color: #fff;
		}
		h3
		{
			color: #007bff;
			text-align: left;
			font-family: sans-serif;
		}
		hr
		{
			background: #000;
		}
		input[type="checkbox"]
		{
			-webkit-appearance:;
			width: 20px;
			height: 20px;
			position: relative;
			top:5px;
		}
	</style>
</head>
<body>
<div style="background: #333;position: absolute;top:50%;left: 50%;width: 400px;height: auto;border: 0px solid #ccc; border-radius: 5px;transform: translate(-50%,-50%);padding: 10px;">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<h3>LOGIN</h3><hr>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #fff">uid:</span><input type="text" name="uid"><br>
		<span style="color: #fff">password:</span><input class="" type="password" name="pass"><br>
		<input checked="checked" type="checkbox" name="save"><span style="color: #fff"> remember data</span><br><hr>
		<input type="submit" value="Login" name="btn" class="btn btn-success">
	</form>
</div>
</body>
</html>