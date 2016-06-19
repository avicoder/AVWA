<?php
session_start(); 
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['firstname']) || empty($_POST['password'])  || empty($_POST['username']) ) {
$error = "Please fill all fields";
}
else
{
	
	
    $username = $_POST['username'];
	$firstname=$_POST['firstname'];
	$password=$_POST['password'];
	if(empty($_POST['role']))
	{
	$role="analyst";
	}
	else{
	$role=$_POST['role'];
	}
    

    $conn = mysql_connect('localhost', 'root', '');
    mysql_select_db('case13_1', $conn);
  
	
    //sanitize username
    $username = mysql_real_escape_string($username);
     
    $query = "INSERT INTO member ( username, password, firstname, role  )
    VALUES ( '$username', '$password', '$firstname', '$role' );";
    mysql_query($query);
     
    mysql_close();
     
    //header('Location: index.php');
    $error= "Your account has been created." ;
	
}}
?>