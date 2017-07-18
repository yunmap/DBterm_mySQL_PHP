<?php
include('config.php');
session_start();
$user_check=$_SESSION['login_user'];
 
$ses_sql=mysql_query("select userID from 2017dbterm.user where userID='$user_check' ");
 
$row=mysql_fetch_array($ses_sql);
 
$login_session=$row['userID'];
 
if(!isset($login_session))
{
header("Location: login.php");
}
 
?>