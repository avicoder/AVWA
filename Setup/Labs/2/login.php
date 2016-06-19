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
$db = mysql_select_db("brokenauth", $connection);
$query2 = mysql_query("select * from member where password='$password' AND username='$username'", $connection);
$rows2 = mysql_num_rows($query2);

if ($rows2 == 1) {

$_SESSION['login_user']=$username; 
header("location: profile.php"); 
} else {
header("Location:loginpage.php");
}
mysql_close($connection); 

}
}
?>
<?php
include('top.php');
?>

<div class="panel  panel-info">
  <div class="panel-heading"><i class="fa fa-eye-slash"></i>  Threat</div>
  <div class="panel-body">
An adversary can bypass authenticationtion  </div>
</div>

<div class="panel  panel-warning">
  <div class="panel-heading"><i class="fa fa-quote-left"></i>  Brief Description</div>
  <div class="panel-body">
This test case is used to activate a session variable at a public page like Forgot Password or first pages of multistep authentication/authorization, including 2FA or Captcha pages. This activated session variable is then used to access the protected resources like post login pages. </div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-SESS-008</span> 
  </div>
  <div class="panel-body">
Can Session puzzling or session overloading be used to bypass authentication or authorization?
</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-warning"> Medium</span></p>
<br><hr />

<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center>

      <form class="form-signin" action="" method="post">
        <center><h2 class="form-signin-heading">Register</h2></center>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="name" id="inputEmail" class="form-control" placeholder="Username"  name="username" required autofocus><br />
        <label for="inputEmail" class="sr-only">Password</label>
        <input type="password" id="inputEmail" class="form-control" placeholder="Password"  name="password" required ><br />


        <button class="btn btn-lg btn-warning btn-block" type="submit" name="submit" >Sign in</button>
		<br/>
		<div class="alert alert-success" role="alert"><span><?php echo $error; ?></span>...</div>
<a href="forgetpass.php">  <span class="label label-success">Forget Password?</span></a>
      </form>
	

</div>Tools Required:
<span class="label label-default">Burp Suite</span>
<span class="label label-default">Inspect Element</span>
<br /> <hr />
<h2>How to test? </h2>
<style type="text/css">
	table.tableizer-table {
	border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
} 
.tableizer-table td {
	padding: 4px;
	margin: 3px;
	border: 1px solid #ccc;
	
}
.tableizer-table th {
	background-color: #428bca; 
	color: #FFF;
	font-weight: bold;
}
</style><table class="tableizer-table">
<tr class="tableizer-firstrow"><th>S. No.</th><th>Testing Technique</th><th>Where to Apply</th><th>Expected Results</th><th>Interpretation</th></tr>
 <tr><td>1</td><td>1.Perform an action to activate possible session variable (e.g. username provided during forgot password)<br/>
2. Now access post-login pages, without authenticating<br/>
3. Automate step 2 by using a burp sitemap<br/>
</td><td>2FA Login,<br/>
Forgot Password page,<br/>
Other sensitive multistep authentication/ authorization functions of the application<br/>
</td><td>Access to internal pages with populated user data</td><td>Unsafe</td></tr>
<td>2</td><td>1.Perform an action to activate possible session variable (e.g. username provided during forgot password)<br/>
2. Now access post-login pages, without authenticating<br/>
3. Automate step 2 by using a burp sitemap<br/>
</td><td>2FA Login,<br/>
Forgot Password page,<br/>
Other sensitive multistep authentication/ authorization functions of the application<br/>
</td><td>Access to internal pages requires authentication</td><td>Safe</td></tr>

</table>


 <?php 
 include('bottom.php')
 ?>