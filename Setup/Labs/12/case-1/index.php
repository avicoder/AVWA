<?php
include('register.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<?php
include('top.php');
?>

<div class="panel  panel-info">
  <div class="panel-heading"><i class="fa fa-eye-slash"></i>  Threat</div>
  <div class="panel-body">
An adversary can enumerate valid userID or user-names of the application  </div>
</div>

<div class="panel  panel-warning">
  <div class="panel-heading"><i class="fa fa-quote-left"></i>  Brief Description</div>
  <div class="panel-body">
If the application responses differs in case of a correct username/ wrong password and wrong username/ wrong password entered by the user. Then this behaviour of the application can be exploited by an attacker for enumerating valid users of the application. </div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-IDENT-003</span></div>
  <div class="panel-body">
Analyse URL Redirections post login see if the redirection pages or URL parameters vary for a valid user and invalid user (both cases password is wrong)

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
        <label for="inputEmail" class="sr-only">First Name</label> 
		<input type="name" id="inputEmail" class="form-control" placeholder="First Name"  name="firstname" required autofocus><br />
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required><br/>
        <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" >Register</button><br />
		<div class="alert alert-warning" role="alert"><span><?php echo $error; ?></span></div><br/>
		<a href='login.php'><span class="label label-danger pull-right">Login</span></a>

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
 <tr><td>1</td><td>At login page, supply an incorrect username and incorrect password</td><td>Login page</td><td>If application redirects to two different pages in both the cases</td><td>Unsafe</td></tr>
 <tr><td>2</td><td>At login page, supply a correct username and incorrect password</td><td>Login Page</td><td>If application redirects to the same page in both the cases</td><td>Safe</td></tr>
</table>


 <?php 
 include('bottom.php')
 ?>