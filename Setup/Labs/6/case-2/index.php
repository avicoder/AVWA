<?php
error_reporting(0);
@ini_set('display_errors', 0);
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
  
This test case is used to check how the application reacts when the payload is tweaked with the help of OR expression. This payload is similar to the attack payload used in SQL Injection. <br />
<br/ >
<br/ >
<strong>Scenario 1: without the comment character	</strong><br/>
The sample payload is as follows: <br/>
   <i>' or '1' = '1  </i>
<br />
It will change a vulnerable login query to: <br/>
<i>//user[username/text()='' or '1' = '1' and password/text()='' or '1' = '1']/account/text())</i> <br /> <br/>

<p>Please note that in the above-mentioned login query, if the condition is met, the account is retrieved from the xml file. Hence, using a comment character might not help in bypassing the login logic if the further logic is dependent on the account.</p>

<strong>Scenario 2: with the help of null byte character (%00 or \00) as comment character </strong> <br /><br/>
 Consider the following search query that returns the account number based on the customerID. In addition to the account number, the XML DB has username, password and the account balance fields.  <br/><br/>

<i>//user[customerID/text()=’+cid+’]/accountNum/text())</i> <br /><br /> 

<p>
Since the account number is hardcoded in the XPATH query, supplying the payload from Scenario will return only the account number. If other fields like password need to be retrieved, the query needs to be altered with the help of null byte (%00 or \00) character. The sample payload would be:
</p> <br/><br />
<i>' or 1=1]/password/text()%00	</i> <br/><br />

 <p>The following is a sample query altered with the help of null byte comment character. This will retrieve the password field from the xml database instead of the account number.</p>
 
 <i>//user[customerID/text()=’’ or 1=1]/password/text()]%00]/accountNum/text())	</i>
 
   </div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-INPVAL-010</span></div>
  <div class="panel-body">
Use OR expressions with the payloads.
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
		<span>
		<br/>
		<div class="alert alert-success" role="alert"><?php

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
?></div></span>

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
 <tr><td>1</td><td>Submit the payload without the commenting character </td><td>Any page that generates a query, e.g. Search or View Item using ItemId.
Typically pages that make web service call.
</td><td>The application responds with additional data compared with the normal response/login bypass.</td><td>Unsafe</td></tr>
 <tr><td>2</td><td>Submit the payload without the commenting character </td><td>Any page that generates a query, e.g. Search or View Item using ItemId.
Typically pages that make web service call.</td><td>The application either blocks the request or considers the payload as a string and renders the result accordingly. </td><td>Safe</td></tr>
</table>



 <?php 
 include('bottom.php')
 ?>