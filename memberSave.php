<?php
    include "config.php";
    header("Content-Type: text/html;charset=UTF-8");
    $data_stream = "'".$_GET['userID']."','".$_GET['PW']."','".$_GET['name']."','".$_GET['address']."','".$_GET['phone']."','".$_GET['account']."'";
    $query = "insert into User(`userID`, `PW`, `name`, `address`, `phone`, `account`) values (".$data_stream.")";
    $result = mysqli_query($conn, $query);
     
    if($result) {
      echo "1";
      header("location: index.php");
  }
    else
      echo "-1";
     
    mysqli_close($conn);
?>
