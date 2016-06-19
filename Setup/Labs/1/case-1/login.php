<?php
session_start(); 
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
$connection = mysql_connect("localhost", "root", "");
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$db = mysql_select_db("company", $connection);
$query = mysql_query("select * from login where username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$query2 = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
$rows2 = mysql_num_rows($query2);

if ($rows2 == 1) {

$_SESSION['login_user']=$username; 
header("location: profile.php"); 
} else {
header("Location:index.php?status=1");
}
mysql_close($connection); 
}
else{
header("Location:index.php?status=2");

}
}}

//header('HTTP/1.0 403 Forbidden');
?>