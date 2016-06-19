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
	
    

  $conn = mysql_connect('mysql1.000webhost.com', 'a1640518_user', 'password123', 'a1640518_cases' ); // Change as per your server settings
    mysql_select_db('a1640518_cases', $conn); // change
  
	$username =  $firstname . $lastname;
    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ");
    $username = str_replace($vowels, "", $username);
  
	$password=current(explode('@', $email)); 
	$password=base64_encode($password);
	$password=substr($password,0,9);
	
    //sanitize username
    $username = mysql_real_escape_string($username);
	
	
	 
    $query = "INSERT INTO member ( username, password, email, firstname ,lastname)
    VALUES ( '$username', '$password', '$email', '$firstname' ,'$lastname');";
    $res= mysql_query($query);
     
	 if($res=1){
	 
	 $message = 'Your Username:' . $username . ' <br /> Password is: ' .$password ;
    $subject = 'Avicoder test : Username & password';
    $to =  $email;
	
    $from = 'avinash.s@paladion.net';
	
    $headers = "From: $from  <".$from.">\r\n";
    $headers.= "Return-Path: " . $from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
	$send = mail( $to, $subject, $message, $headers );
	 
	 if( $send )
    {
        $error = '<br /><div class="alert alert-success" role="alert">Username & password sent to your mail : </br> '. $email . "</div> ";
    }
    else
    {
        $error = 'Register Again';
    }
	 
	 }
	 
    mysql_close();
     
    //header('Location: index.php');
  //  $error= "Your account has been created.<br >  Please note - <br > <b>username: </b>" .$username ." <br ><b>password </b>" . $password ;
	
}}
?>