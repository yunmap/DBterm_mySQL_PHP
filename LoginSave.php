<?php

    session_cache_limiter('');
    session_start();
    include "config.php";

    $sqlConn = mysql_connect($db_host, $db_user, $db_passwd);
    mysql_select_db($db_name, $sqlConn);

    $id = '".$_GET['userID']."';
    $pass = '".$_GET['PW']."';

    $getID = "SELECT userID FROM user WHERE id='$id'";
    $getID = mysql_query($getID);
    $getID = mysql_fetch_array($getID);
    

    if($getID['id']) {

        $getPASS = "SELECT PW FROM user WHERE id='$id'";
        $getPASS = mysql_query($getPASS);
        $getPASS = mysql_result($getPASS, 0);

        if($getPASS == $pass) {

            $_SESSION['userID'] = $getID;
            header("location:index.php");
            return 0;
        }
        else {
            echo "PASSWORD ERROR";
            return 1;
        }
    }
    
    else {
        echo "ID DOESN'T EXIST";
        return 1;
    }
?>