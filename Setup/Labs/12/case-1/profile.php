<?php
include('session.php');
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
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case</div>
  <div class="panel-body">
Analyse URL Redirections post login see if the redirection pages or URL parameters vary for a valid user and invalid user (both cases password is wrong)

</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-success"> Low</span></p>
<br><hr />

<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center>

<hr/>
<div class="form-signin">
<?php

switch ($login_role)
{

case "analyst":

include('analyst.php');
break;

case "manager":
include('manager.php');
break;

case "admin":
include('admin.php');
break;

default:

}



?>
	  </div>
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