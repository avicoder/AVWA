
<?php
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
An adversary can steal sensitive data.  </div>
</div>

<div class="panel  panel-warning">
  <div class="panel-heading"><i class="fa fa-quote-left"></i>  Brief Description</div>
  <div class="panel-body">
  <p>
Local Storage also known as Web Storage or Offline Storage is a mechanism to store data as key/value pairs tied to a domain and enforced by the same origin policy (SOP). </p><p>
Access to the storage is normally done using the setItem and getItem functions. The storage can be read from javascript which means with a single XSS an attacker would be able to extract all the data from the storage. Also malicious data can be loaded into the storage via JavaScript so the application needs to have the controls in place to treat untrusted data. Check if there are more than one application in the same domain like example.foo/app1 and example.foo/app2 because those will share the same storage.<p><p>
Data stored in this object will persist after the window is closed, it is a bad idea to store sensitive data or session identifiers on this object as these can be accesed via JavaScript. Session IDs stored in cookies can mitigate this risk using the httpOnly flag.</p>
</div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case</div>
  <div class="panel-body">
Is sensitive data or session token stored in local data storage?

</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-warning"> Medium</span></p>
<br><hr />

<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center>

      <form class="form-signin" action="login-post.php" method="post">
       <center> <h2 class="form-signin-heading">Login </h2> </center>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="name" id="inputEmail" class="form-control" placeholder="rammohan"  name="username" required autofocus><br />
  
        <label for="inputEmail" class="sr-only">Password</label>
        <input type="password" id="inputEmail" class="form-control" placeholder="password"  name="password" required autofocus><br />

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" >Sign in</button>
		<span><?php echo $error; ?></span>
		
      </form>
	  
	  <div class=pull-right>  <a href="index.php"><span class="label label-primary"> Sign Up</span></a></div><br />
	  
	  
	  
	  
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
 <tr><td>1</td><td>Is sensitive or session token stored in local data storage? Using Google Chrome, click on menu -> More Tools -> Developer Tools. Then under Resources you will see 'Local Storage'. Click on the application domain that you are testing and check for a key value pair with senstive information.</td><td>Local datastorage</td><td>Any sensitive information like passwords, usernames, session tokens, credit cards</td><td>unsafe</td></tr>
</table>


 <?php 
 include('bottom.php')
 ?>