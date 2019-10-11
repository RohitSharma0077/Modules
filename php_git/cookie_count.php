<?php  
	if(isset($_COOKIE['count']))
	{
		$cookie=++$_COOKIE['count'];
		setcookie("count",$cookie);
		echo "you have visited ".$cookie." times";
	}
	else
	{
		echo "welcome for the first time";
		$cookie=1;
		setcookie("count",$cookie,time()+60);
	}
?>