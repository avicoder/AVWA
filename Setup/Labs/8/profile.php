<?php
	ini_set('display_errors', 0);
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("sixteen", $connection);
session_start();// Starting Session
// Storing Session
$error=''; 

$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select * from login where userid='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['userid'];
$login_name=$row['name'];
$login_balance=$row['balance'];


if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>
<?php
if (isset($_GET['transact'])) {
if (empty($_GET['account']) || empty($_GET['amount'])) {
$error = "Account number or Amount is invalid";
}
else
{
if ($_GET['userid']){
$login_id=$_GET['userid'];
}
else{
$login_id=$login_session;
}
$account=$_GET['account'];
$amount=$_GET['amount'];
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("sixteen", $connection);

$query2 = mysql_query("select balance from login where userid='$login_id'", $connection);
$rows2 = mysql_num_rows($query2);

if ($rows2 == 1) {

if ($amount<$login_balance){
$error='Trasnsaction Completed';
$login_balance=$login_balance-$amount;


$query3 = mysql_query("UPDATE login SET balance='$login_balance' WHERE userid='$login_id' ", $connection);
//$rows3 = mysql_num_rows($query3);

}
else{
$error='Amount Exceeded';}

//header("location: profile.php"); 
} else {
header("Location:index.php?status=Failed");
}
mysql_close($connection); 

}}
?>
<?php
include('top.php');
?>

<div class="panel  panel-info">
  <div class="panel-heading"><i class="fa fa-eye-slash"></i>  Threat</div>
  <div class="panel-body">
An adversary may bypass authentication, input validation or trigger error messages via HTTP Parameter Pollution attack.</div>
</div>

<div class="panel  panel-warning">
  <div class="panel-heading"><i class="fa fa-quote-left"></i>  Brief Description</div>
  <div class="panel-body">
Current HTTP standards do not include guidance on how to interpret multiple input parameters with the same name hence, different server side technologies (web servers, application servers and application platforms) interpret and handle such requests differently.
<br/><br/>
By supplying multiple HTTP parameters with the same name i.e. HTTP parameter pollution attack an attacker may bypass WAF rules, application's input validation and authentication mechanisms. Parameters present in GET, POST or Cookie can be polluted. 
</div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case</div>
  <div class="panel-body">
Is server side HPP possible?

</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-success"> Low</span></p>
<br><hr />

<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center><hr/>

      <form class="form-signin" action="" method="get">
	  	  <a href="logout.php"><span class="label label-danger pull-right">Logout</span></a>

   <center>     <h2 class="form-signin-heading">Internet Banking </h2></center>
   <div class="alert alert-success" role="alert">Welcome : <?php echo $login_name; ?></div>
   <b>Balance : </b><?php echo $login_balance; ?>
        <label for="inputEmail" class="sr-only">User ID</label>
        <input type="text`" id="inputEmail" class="form-control" placeholder="Enter Amount"  name="amount" required autofocus><br />
        <label for="inputEmail" class="sr-only">Account</label>
        <input type="text" id="inputEmail" class="form-control" name="account" placeholder="Account Number" required><br/>
        <button class="btn btn-lg btn-success btn-block" type="submit" name="transact"  value="true">Initiate Transaction</button><br />
		<center><span><?php echo $error; ?></span></center>

      </form>
</div>






Tools Required:
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
 <tr><td>1</td><td>In sensitive requests append existing parameter multiple times with different values and observe the server response to figure out how does server parse such requests. <br/><br/>

Different servers will respond to such requests differently for example, if IIS server uses modsecurity extension and hosts an ASP.net application then it will concatenate the values of multiple parameter having the same name. This behaviour of the server can be exploited to bypass the modsecurity SQL prevention rules. <br/><br/>

So, if your following request is being filtered by modsecurity,<br/><br/>

http://abc.com/index.aspx?page=select 1,2,3 from table where id=1 <br/><br/>

Then you may be able to bypass this filter rule via HPP,<br/><br/>

http://abc.com/index.aspx?page=select 1&page=2,3 from table where id=1 <br/><br/>
</td><td>Anywhere in the application

</td><td>If request is parsed in insecure way that may lead to different type of attacks like input validation by pass, WAF bypass or authentication bypass.</td><td>Unsafe</td></tr>
</table>


 <?php 
 include('bottom.php')
 ?>