<?php
include('login.php'); // Includes Login Script
	ini_set('display_errors', 0);
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
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-INPVAL-004</span></div>
  <div class="panel-body">
Is server side HPP possible?

</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-success"> Low</span></p>
<br><hr />

<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center>

      <form class="form-signin" action="" method="post">
   <center>     <h2 class="form-signin-heading">Internet Banking </h2></center>
        <label for="inputEmail" class="sr-only">User ID</label>
        <input type="name" id="inputEmail" class="form-control" placeholder="8-digit user ID"  name="userid" required autofocus><br />
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required><br/>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" >Sign in</button>
		<span><?php echo $error; ?></span>

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