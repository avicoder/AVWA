<?php
session_start(); 
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['firstname']) || empty($_POST['lastname'])  || empty($_POST['email']) ) {
$error = "Username or Password is invalid";
}
else
{
	
	
    $email = $_POST['email'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	
    

    $conn = mysql_connect('localhost', 'root', '');
    mysql_select_db('brokenauth', $conn);
  
	$username =  $firstname . $lastname;
    
  
	$password=current(explode('@', $email)); 
	$password=base64_encode($password);
	$password=substr($password,0,9);
	
    //sanitize username
    $username = mysql_real_escape_string($username);
     
    $query = "INSERT INTO member ( username, password, email, firstname ,lastname)
    VALUES ( '$username', '$password', '$email', '$firstname' ,'$lastname');";
    mysql_query($query);
     
    mysql_close();
     
    //header('Location: index.php');
    $error= "Your account has been created.<br >  Please note - <br > <b>username: </b>" .$username ." <br ><b>password </b>" . $password ;
	
}}
?>