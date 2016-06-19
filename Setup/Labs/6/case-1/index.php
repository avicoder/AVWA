<?php
//error_reporting(0);
//@ini_set('display_errors', 0);
?>

<?php
$result = '';
$utype = '';
if(isset($_POST['submit'])){
$doc = new DOMDocument;
$doc->load('emp.xml');
$xpath = new DOMXPath($doc);
$user = $_POST['uname'];
$pass = $_POST['passwd'];
$query = "/Employees/Employee[UserName='".$user."' and Password='".$pass."']/Type/text()";
$result = $xpath->query($query);
}
?>
<?php
include('top.php');
?>

<div class="panel  panel-info">
  <div class="panel-heading"><i class="fa fa-eye-slash"></i>  Threat</div>
  <div class="panel-body">
An adversary can conduct an XPATH Injection attack</div>
</div>

<div class="panel  panel-warning">
  <div class="panel-heading"><i class="fa fa-quote-left"></i>  Brief Description</div>
  <div class="panel-body">
  
  The XML Path Language (XPath) is an interpreted language used to navigate around XML documents and to retrieve data from within them. In most cases, an XPath expression represents a sequence of steps that is required to navigate from one node of a document to another. 
<br /><br />
Where web applications store data within XML documents, they may use XPath to access the data in response to user-supplied input. If this input is inserted into the XPath query without any fi ltering or sanitization, an attacker may be able to manipulate the query to interfere with the application’s logic or retrieve data for which she is not authorized.
<br /><br />
This test case is used to check how the application reacts when a single quote (‘) is supplied as the payload for a functionality that uses XPATH queries to access data. If the application is vulnerable to XPATH injection, it will respond with an error message.

  
  </div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-INPVAL-010</span></div>
  <div class="panel-body">
Simple attack pattern using a single quote (') to generate errors.

</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-danger"> High</span></p>
<br><hr />

<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center>

      <form class="form-signin" action="" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="name" id="inputEmail" class="form-control" placeholder="Username"  name="uname" required autofocus><br />
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="passwd" placeholder="Password" required><br/>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" >Sign in</button>
		<span><?php

foreach( $result as $row){
$utype = $row->nodeValue;
  break;
}
if($utype == 'Admin'){
  echo "Welcome !! You are a Admin User";
} elseif ($utype == 'User'){
  echo "Welcome !! You are a Normal User";
} else {
  echo "You are not Authenticated !!";
}
?></span>

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
	background-color: #104E8B; 
	color: #FFF;
	font-weight: bold;
}
</style><table class="tableizer-table">
<tr class="tableizer-firstrow"><th>S. No.</th><th>Testing Technique</th><th>Where to Apply</th><th>Expected Results</th><th>Interpretation</th></tr>
 <tr><td>1</td><td>Submit Single quote as the payload to an input field.</td><td>Any page that generates a query, e.g. Search or View Item using ItemId.
Typically pages that make web service calls.
</td><td>The application responds with an error message that reveals XPATH-related information </td><td>Unsafe</td></tr>
 <tr><td>2</td><td>Submit Single quote as the payload to an input field.</td><td>Any page that generates a query, e.g. Search or View Item using ItemId.
Typically pages that make web service calls.
</td><td>The application either blocks the request or considers Single quote as a string and renders result accordingly. </td><td>Safe</td></tr>
</table>


 <?php 
 include('bottom.php')
 ?>