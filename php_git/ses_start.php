<?php
session_start();

?>
<?php
$_SESSION['user']="admin";
echo "session started";
echo "<br>";
echo "<a href='ses_after.php'>click </a>";

?>