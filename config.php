<?php
$db_host = "127.0.0.1";
$db_user = "root";
$db_passwd = "****";
$db_name = "2017dbterm";
$conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
if (mysqli_connect_errno($conn)) {
	echo "fail to connect DB :" . mysqli_connect_error();
} else {

}
?>
