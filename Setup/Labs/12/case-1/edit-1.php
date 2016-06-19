<?php
include('session.php');
$error=''; 
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Your Profile</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
switch ($login_role)
{

case "analyst":

include('analyst-edit.php');
break;

case "manager":
include('manager-edit.php');
break;

case "admin":
include('admin-edit.php');
break;

default:
}
?>

<?php
if (isset($_POST['edit'])) {

	$conn = mysql_connect('localhost', 'root', '');
    mysql_select_db('case13_1', $conn);

if($login_role=="analyst"){

	$phone=$_POST['phone'];	
    $query = "UPDATE member SET phone='$phone' WHERE username='$login_session' ";
	mysql_query($query);
	}
else if($login_role=="manager")
	{
		 $user=$_POST['account-delete'];
		   
		$res=mysql_query("DELETE FROM member WHERE username='$user'");		
     }
else if($login_role=="admin") {

	$username = $_POST['username'];
	$firstname=$_POST['firstname'];
	$password=$_POST['password'];
	$role=$_POST['role'];
	
	
    $query = "INSERT INTO member ( username, password, firstname, role  )
    VALUES ( '$username', '$password', '$firstname', '$role' );";
    mysql_query($query);
     $error="Account created";
}


	 mysql_close();
     
//	header('Location: profile.php');
}



?>

</body>
</html>
