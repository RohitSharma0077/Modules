<?php


if (isset($_POST["submit"]))
{

	$imgname=$_FILES["img"]["name"];
	$stats=move_uploaded_file($_FILES["img"]["tmp_name"] ,"uploads/" .$imgname);
	if (!empty($stats)) {
		echo "file uploaded";
	}
}



?>