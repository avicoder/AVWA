<?php
include('session22.php');
if (isset($_POST['submit'])) {
	if (empty($_POST['firstpass']) || empty($_POST['lastpass'])) {
	$error = "Invalid entry";
	}
	else if  (  $_POST['firstpass'] !== $_POST['lastpass'] )
	{
	$error="password did not match";
	}
	else {
	$newpass=$_POST['firstpass'];
	$email_check=$_SESSION['agent'];
	$conn = mysql_connect('localhost', 'root', '');
    mysql_select_db('brokenauth', $conn);
  $query = "UPDATE member SET password='$newpass' WHERE email='$email_check' ";
	
	mysql_query($query);
    mysql_close();	
	header('Location:login.php');
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
        <label for="inputEmail" class="sr-only">New Password</label>
        <input type="password" id="inputEmail" class="form-control" placeholder="New Password"  name="firstpass" required autofocus><br />
        <label for="inputEmail" class="sr-only">Confirm Password</label>
        <input type="password" id="inputEmail" class="form-control" placeholder="Confirm Password"  name="lastpass" required ><br />
   

        <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" >Set Password</button>
		<br/>
		<div class="alert alert-success" role="alert"><span><?php echo $error; ?></span>...</div>
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