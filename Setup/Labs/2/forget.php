<?php
session_start(); 
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['email']) ) {
$error = "Email can not be blank";
}
else
{
	
	
    $email = $_POST['email'];
    

    $conn = mysql_connect('localhost', 'root', '');
    mysql_select_db('brokenauth', $conn);
	$query = mysql_query("select * from member where email='$email'", $conn);
	$rows = mysql_num_rows($query);
	if ($rows == 1) {	
		
		
		
	$error="New password is send";

		$_SESSION['agent']=$email; 
		
		    mysql_close();

    }
	else
		{
		$error='Email is not Registered';
			}

}}
?>