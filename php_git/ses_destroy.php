<?php
session_start();
session_unset();
session_destroy();
//header("location:sessiondest.php");
echo "end";
?>