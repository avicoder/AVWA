

<?php
include('top.php');
?>

<div class="panel  panel-info">
  <div class="panel-heading"><i class="fa fa-eye-slash"></i>  Threat</div>
  <div class="panel-body">
An adversary can perform Cross-Site Scripting (XSS) attacks.

 </div>
</div>

<div class="panel  panel-warning">
  <div class="panel-heading"><i class="fa fa-quote-left"></i>  Brief Description</div>
  <div class="panel-body">
<p>HTML injection is a type of injection issue that occurs when a user is able to control an input point and is able to inject arbitrary HTML code into a vulnerable web page. This vulnerability can have many consequences, like disclosure of a user's session cookies that could be used to impersonate the victim, or, more generally, it can allow the attacker to modify the page content seen by the victims. 
</p>

 </div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-CLIENT-003</span></div>
  <div class="panel-body">
 Is XSS possible by  injecting HTML  code?
</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-danger"> High</span></p>
<br><hr />


<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center>

      <form class="form-signin" action="" method="get">

        <center><h2 class="form-signin-heading">Image DB
		</h2>
	</center>
        <label for="inputEmail" class="sr-only">Image Name</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="nature.jpg"  name="name" required autofocus><br />
	<center><i class="fa fa-picture-o fa-5x"></i></center>    <br/>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" >Find Image</button
      </form>
	  </br>
	  <b>Result : </b> <!-- <script src="insecureJS.js"></script> -->
<?php
  echo ($_GET["name"]);
?>
	  
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
 <tr><td>1</td><td>Look for input points that gets appended// prepends with the HTML tags like &lt;script&gt; &lt;h1&gt; &lt;img&gt; etc </td><td>Anywhere on the site</td><td>The application accepts the tags and the gets parsed in the browser.</td><td>Unsafe</td></tr>
 <tr><td>2</td><td>Submit tags as the value for the input fields</td><td>Anywhere on the site</td><td>Output sanitization is in place and the script does not execute in the browser.</td><td>unsafe</td></tr>
</table>



 
 <?php 
 include('bottom.php')
 ?>