<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("brokenauth", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['agent'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select email from member where email='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['email'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>
