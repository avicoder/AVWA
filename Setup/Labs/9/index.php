<?php
include('top.php');
?>

<div class="panel  panel-info">
  <div class="panel-heading"><i class="fa fa-eye-slash"></i>  Threat</div>
  <div class="panel-body">
An adversary may exploit insecurely implemented CORS</div>
</div>

<div class="panel  panel-warning">
  <div class="panel-heading"><i class="fa fa-quote-left"></i>  Brief Description</div>
  <div class="panel-body">
Cross Origin Resource Sharing (CORS) is a mechanism that enables a web browser to perform "cross-domain" requests using the XMLHttpRequest L2 API in a controlled manner. <br /><br />

Cross-Origin requests have an Origin header, that identifies the domain initiating the request and is always sent to the server. This header value should be validated at the server to ensure only authorized domains interact with the application. However, this validation is not sufficient to prevent unauthorized cross-domain interaction as origin header manipulated.<br /><br />
"Access-Control-Allow-Origin" is a response header used by a server to indicate which domains are allowed to read the response. If this header is not set properly then unauthorized domains may be able to read server responses which may lead to sensitive data disclosure.

  
  </div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-CLIENT-007</span></div>
  <div class="panel-body">
Is "Origin" header in client request validated at the server? <br />
Is "Access-Control-Allow-Origin" header in server response is set securely?
</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-success"> Low</span></p>
<br><hr />

<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center>

<hr />
<div class="form-signin">
<?php
    echo date('l jS \of F Y h:i:s A') . "<br/>";
    echo " <b>Pwned Pwned Pwned!! </b><br />";
    //header('Access-Control-Allow-Origin:*');
?>
<h1><span class="label label-danger" id=txt></span></h1>
</div>

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
	background-color: #104E8B; 
	color: #FFF;
	font-weight: bold;
}
</style><table class="tableizer-table">
<tr class="tableizer-firstrow"><th>S. No.</th><th>Testing Technique</th><th>Where to Apply</th><th>Expected Results</th><th>Interpretation</th></tr>
 <tr><td>1</td><td>Provide a random domain as the value of "Origin" request header and analyze the server response.</td><td>Anywhere in the application</td><td>If server accepts and processes the request as usual</td><td>Unsafe</td></tr>
 <tr><td>2</td><td>Provide a random domain as the value of "Origin" request header and analyze the server response.</td><td>Anywhere in the application</td><td>If server throws an error</td><td>Safe</td></tr>
 <tr><td>3</td><td>Check the value of Access-Control-Allow-Origin response header for sensitive pages. </td><td>Value is set as "*" (wildcard) or inappropriate domains. </td><td>The application either blocks the request or considers the payload as string and renders the result accordingly. </td><td>Unsafe</td></tr>
 <tr><td>4</td><td>Check the value of Access-Control-Allow-Origin response header for sensitive pages. </td><td>Value is set as "*" (wildcard) or inappropriate domains. </td><td>Only authorized domain name is present in the response header.  </td><td>Safe</td></tr>
</table>

<script>
function startTime() {
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML = h+":"+m+":"+s;
    var t = setTimeout(function(){startTime()},500);
}

function checkTime(i) {
    if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
 <?php 
 include('bottom.php')
 ?>