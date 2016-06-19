

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

  
  This test case is used to verify whether the application is vulnerable to DOM XSS. There is a wide range of methods and attributes that could be used to render HTML content. If these methods are provided with an untrusted input, then there is a high risk of XSS, specifically an HTML injection one. Malicious HTML code could be injected, for example, via innerHTML that is used to render user-inserted HTML code. If strings are not correctly sanitized, the problem could lead to XSS-based HTML injection. Another method could be document.write(). <br/><br/>

A sample vulnerable JavaScript code is: <br/><br/>

var userposition=location.href.indexOf("user=");<br/>
var user=location.href.substring(userposition+5);<br/>
document.getElementById("Welcome").innerHTML=" Hello, "+user;<br/><br/>

Please note that the innerHTML function here adds the user variable depending on the Username parameter in the URL. Hence, changing the value of this parameter to a script will lead to XSS. <br/><br/>

Similarly, the following JavaScript code shows a possible vulnerable script in which the attacker is able to control the "location.hash" (source) that reaches the "cssText" function (sink). This particular case may lead to DOMXSS in older browser versions such as Opera, Internet Explorer and Firefox; for reference see DOM XSS Wiki, section "Style Sinks".<br/><br/>

&lt;script&gt;<br/>
  if (location.hash.slice(1)) { <br/>
    document.getElementById("a1").style.cssText = "color: " + location.hash.slice(1); <br/>
  } <br/>
&llt;/script&gt;<br/>

  
  

 </div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-INPVAL-001</span></div>
  <div class="panel-body">
Is it possible to inject HTML tags or CSS injection?
</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-danger"> High</span></p>
<br><hr />


<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center>

      <form class="form-signin" action="" method="post">

        <center><h2 class="form-signin-heading">Your Favourite Colour.
		</h2>
	</center>
        <label for="inputEmail" class="sr-only">Image Name</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="green"  name="color" required autofocus><br />
	<center><i class="fa fa-magic fa-2x"></i><div style="height:70px;width:70px;background-color:<?php echo $_POST['color'];?>"></div></center>    <br/>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" >Find Image</button
      </form>
	  </br>

	  
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
 <tr><td>1</td><td> Look for input points that gets appended with the document object model with the help of functions location.href.slice(), document.write(), innerHTML etc </td><td>Anywhere on the site </td><td>The application accepts the script and the script gets executed in the browser.</td><td>Unsafe</td></tr>
 <tr><td>2</td><td>Submit script as the value for the input fileds</td><td>Anywhere on the site</td><td>Output sanitization is in place and the script does not execute in the browser.</td><td>Safe</td></tr>
</table>



 
 <?php 
 include('bottom.php')
 ?>