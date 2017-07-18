<?php
	include "config.php";
	include "lock.php";

	$pID = $_GET['pID'];
	if ($pID < 50000) {
		$sql = "DELETE FROM 2017dbterm.pfood WHERE pID = '$pID'";
		mysql_query($sql);
		echo "<script>alert(\"삭제가 완료되었습니다.\");</script>";
		header("location: food_admin.php");
	}
	else {
		$sql = "DELETE FROM 2017dbterm.pflower WHERE pID = '$pID'";
		mysql_query($sql);
		echo "<script>alert(\"삭제가 완료되었습니다.\");</script>";
		header("location: flower_admin.php");
	}
?>