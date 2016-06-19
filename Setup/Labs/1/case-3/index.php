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
This test case is used to check how predictable the identifier (usernames or user ids) is. A sequential or predictable logic is considered weak. Which may allow an attacker to perform username/ user id guessing. Later, these accounts can be brute forced or a DOS condition can be caused depending on the application features.</div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-AUTHN-007</span></div>
  <div class="panel-body">
Check if User IDs generated are generated as per some pre-define policy, they contain sequential numbers or have a predictable format.
</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-warning">Medium</span></p>
<br><hr />
<div class="well">

<center><h2><span class="label label-info">Demo</span><h2></center>

      <form class="form-signin" action="" method="post">
        <h2 class="form-signin-heading">Register here</h2>
        <label for="inputEmail" class="sr-only">First Name</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Ram"  name="firstname" required autofocus><br />
        <label for="inputEmail" class="sr-only">Last Name</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Mohan"  name="lastname" required autofocus><br />     
		<label for="inputEmail" class="sr-only">Email</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="rammohan@paladion.net"  name="email" required autofocus><br />
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" >Sign up </button>
		
		<span><?php echo $error; ?></span>

      </form>
	  
</div>
 
 
 <div>Tools Required:
<span class="label label-default">Burp Suite</span>
<span class="label label-default">Inspect Element</span></div>
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
	background-color: #104E8B; 
	color: #FFF;
	font-weight: bold;
}
</style><table class="tableizer-table">
<tr class="tableizer-firstrow"><th>S. No.</th><th>Testing Technique</th><th>Where to Apply</th><th>Expected Results</th><th>Interpretation</th></tr>
 <tr><td>1</td><td>Go to registration page and submit the details. Check the generated usernames. Do this multiple times.</td><td>Registration page</td><td>Unpredictable/Random usernames each time</td><td>safe</td></tr>
 <tr><td>2</td><td>Go to registration page and submit the details. Check the generated usernames. Do this multiple times.</td><td>Registration page</td><td>Generated usernames are sequential or the logic behind username can be guessed or predicted</td><td>unsafe</td></tr>
</table>

 <?php 
 include('bottom.php')
 ?>