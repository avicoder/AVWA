
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
Websocket provides full duplex communication over a TCP connection. Websockets are used in web applications to speed up the communication. In web application a persistent connection between the browser and the server can be established using websockets. Initial 'upgrade' handshake happens over HTTP and later communication happens over the TCP channels using websocket protocol.  <br /><br/>

If 'Origin' header of initial handshake is not verified at the server then the webSocket server may accept connections from any origin. This could allow attackers to communicate with the webSocket server cross-domain which may lead to information disclosure etc.
</div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-CLIENT-010</span></div>
  <div class="panel-body">
Server checks for origin header of the WebSocket handshake?

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
	background-color: #428bca; 
	color: #FFF;
	font-weight: bold;
}
</style><table class="tableizer-table">
<tr class="tableizer-firstrow"><th>S. No.</th><th>Testing Technique</th><th>Where to Apply</th><th>Expected Results</th><th>Interpretation</th></tr>
 <tr><td>1</td><td>Check the requests for URI ws:// or wss:// or "Upgrade: websocket" header. Alternatively you check  client side code for the presence of ws:// or wss:// URI which would confirm that websocket is being used.
<br/><br/>
Connect to websocket using one of the clients to confirm whether server validates the 'Origin' value or not.<br/><br/>
</td><td>Anywhere in the application</td><td>Connection from any domain (Origin) is allowed.</td><td>Unsafe</td></tr>
 <tr><td>2</td><td>""</td><td>""</td><td>Connection from only the actual application domain (Origin) is allowed.</td><td>Safe</td></tr>
</table>


 <?php 
 include('bottom.php')
 ?>