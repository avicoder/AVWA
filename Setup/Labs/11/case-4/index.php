
<?php
include('top.php');
?>

<div class="panel  panel-info">
  <div class="panel-heading"><i class="fa fa-eye-slash"></i>  Threat</div>
  <div class="panel-body">
An adversary can exploit web socket vulnerabilities</div>
</div>

<div class="panel  panel-warning">
  <div class="panel-heading"><i class="fa fa-quote-left"></i>  Brief Description</div>
  <div class="panel-body">
Websocket provides full duplex communication over a TCP connection. Websockets are used in web applications to speed up the communication. In web application a persistent connection between the browser and the server can be established using websockets. Initial 'upgrade' handshake happens over HTTP and later communication happens over the TCP channels using websocket protocol. 
<br/><br/>
If proper input output validation is not implemented on the server side then the application using websockets may be vulnerable to XSS and other type of injection attacks.

</div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-CLIENT-010</span></div>
  <div class="panel-body">
Input sanitization has been implemented?	

</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-warning"> Medium</span></p>
<br><hr />

<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center><hr/>

  	<div id="page-wrapper" class=form-signin>

		<strong><div id="status">Connecting...</div></strong>
		<ul  class="list-group" id="messages"></ul>

		<form id="message-form" action="#" method="post">
			<textarea id="message" placeholder="Write your message here..." required style="width:100%;border: 1px solid #d9d9d9;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1) inset;
    margin-bottom: 1rem;
    min-height: 100px;
    padding: 0.5rem;
   "></textarea>
			<br />
			<button type="submit" class="btn btn-sm btn-success btn-block">Send Message</button>
			<button type="button" id="close" class="btn btn-sm btn-danger btn-block">Close Connection</button><br />
		</form>
	</div>

	<script src="app.js"></script>
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
 <tr><td>1</td><td>Understand the usage of websocket in the application and try all the standard techniques for XSS and injection vulnerability detection. </td><td>Pages using websockets</td><td>Successful attack.</td><td>Unsafe</td></tr>
 <tr><td>2</td><td>Understand the usage of websocket in the application and try all the standard techniques for XSS and injection vulnerability detection.</td><td>Pages using websockets</td><td>Failed attack.</td><td>safe</td></tr>
</table>


 <?php 
 include('bottom.php')
 ?>