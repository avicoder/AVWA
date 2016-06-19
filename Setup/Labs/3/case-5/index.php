

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
<p>DOM-based Cross-Site Scripting is the de-facto name for XSS bugs which are the result of active browser-side content on a page, typically JavaScript, obtaining user input and then doing something unsafe with it which leads to execution of injected code. This document only discusses JavaScript bugs which lead to XSS.
</p>
<p>

The DOM, or Document Object Model, is the structural format used to represent documents in a browser. The DOM enables dynamic scripts such as JavaScript to reference components of the document such as a form field or a session cookie. The DOM is also used by the browser for security - for example to limit scripts on different domains from obtaining session cookies for other domains. A DOM-based XSS vulnerability may occur when active content, such as a JavaScript function, is modified by a specially crafted request such that a DOM element that can be controlled by an attacker.
</p>
 </div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-CLIENT-001</span></div>
  <div class="panel-body">
DoM Based XSS possible?</div>
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
<script>
var queryString = window.location.hash.substring(1);
var keyValues = queryString.split('&'); 

for(var i in keyValues) { 
    var key = keyValues[i].split('=');
    if (key[0] == 'name') {
      document.write((key[1]));
    }
}
</script>
	  
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
 <tr><td>1</td><td>Check if the value of the DOM objects are written to the output using any of the following objects/ methods: a.) window.location b.) document.write c.) document.cookie</td><td>Any page on the site which uses JavaScript</td><td>If user controlled values are written to the output, example: &lt;script&gt;document.write(document.URL);&lt;/script&gt;</td><td>Unsafe</td></tr>
 <tr><td>2</td><td>Check if the value of the DOM objects are written to the output using any of the following objects/ methods: a.) window.location b.) document.write c.) document.cookie</td><td>Any page on the site which uses JavaScript	</td><td>If no user controlled values are written to the output.</td><td>Safe</td></tr>
</table>




 
 <?php 
 include('bottom.php')
 ?>