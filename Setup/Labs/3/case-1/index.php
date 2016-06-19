

<?php
include('top.php');
?>

<div class="panel  panel-info">
  <div class="panel-heading"><i class="fa fa-eye-slash"></i>  Threat</div>
  <div class="panel-body">
An adversary can perform Cross-Site Scripting (XSS) attacks

 </div>
</div>

<div class="panel  panel-warning">
  <div class="panel-heading"><i class="fa fa-quote-left"></i>  Brief Description</div>
  <div class="panel-body">
<p>This test case is used for confirming XSS if the user input is reflected inside an HTML tag. For instance, consider a scenario where the application filters user input for only < and > symbols. In this scenario the attacker can supply html attributes like “OnLoad”, “Onfocus” (depending on the html tags attributes), etc. to perform XSS. </p>
<p>
Please note that the reflection can be in the immediate response (Reflected XSS) or stored by the application and reflected in a different page (Stored XSS). 
</p>
<p>If the reflection point is: 	 <strong> &lt;input type="text" name="state" value="INPUT_FROM_USER" &gt;   </strong>
<p>
The following payload will lead to XSS: </p>
<p>
" onfocus="alert(document.cookie)
</p>

 </div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-INPVAL-001</span></div>
  <div class="panel-body">
 Is XSS possible in HTML attributes?
</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-danger"> High</span></p>
<br><hr />


<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center>

      <form class="form-signin" action="" method="post">

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
	echo  "<strong><img src='"  .htmlspecialchars($_POST['name']) . "'".' alt=' . '"Image not found with name :  '.  ($_POST['name']) .'" /></strong>' ; 
 
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
 <tr><td>1</td><td> Identify the reflection point. Submit HTML attributes based on the reflection point. Observe the response.</td><td>Throughout the application </td><td>The supplied payload is executed</td><td>Unsafe</td></tr>
 <tr><td>2</td><td>Identify the reflection point. Submit HTML attributes based on the reflection point. Observe the response.</td><td>Throughout the application</td><td>The reflected payload is sanitized and not executed.</td><td>Safe</td></tr>
</table>



 
 <?php 
 include('bottom.php')
 ?>