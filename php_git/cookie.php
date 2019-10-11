<?php 
$name ='Rishu_Cokkie';
$time = time()+60;
setcookie($name,1,$time);
//setcookie("name",1,time()-60);
//setcookie("rohit",1,time()+60);
	if(isset($_COOKIE[$name]))
	{
		echo " cokkie is set as ".$name;
	}
	else
	{
		echo "cokkie not is set";
	}
?>