
<?php
include('login.php'); // Includes Login Script

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
An adversary may exploit insecurely implemented Web Messaging </div>
</div>

<div class="panel  panel-warning">
  <div class="panel-heading"><i class="fa fa-quote-left"></i>  Brief Description</div>
  <div class="panel-body">
Earlier same origin policy did not allow two pages to communicate if  those are fetched from two different domains (opened in two different tabs, windows or iframes). However, web messaging feature of HTML5 allows two pages fetched from different domains to communicate. This feature is also called as cross-document messaging. <br/><br/>

One page/ document can post messages to other document/ page using postMessage() method. Other page/ document can receive the messages using the even listeners/ handlers which is created using the following methods:
<br/><br/>
•	window.attachEvent() with event type "onmessage"<br/>
•	window.addEventListener() with event type "message"<br/>
<br/>
If the above mentioned methods are not used securely then application's page (loaded in browser) will accept inputs from pages of untrusted domains (loaded in the browser) this could result in multiple attacks like XSS and CSRF type attack etc.
</div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-CLIENT-011</span></div>
  <div class="panel-body">
Is message origin validation present in event listener/ handler?
</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-warning"> Medium</span></p>
<br><hr />

<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center>
<p>
  This is Attacker Domain
</p>

<center>
<iframe class="panel panel-primary" id="receiver" src="http://avicoder.me/post-message/receiver.html" width="500" height="200">
  <b><p>Your browser does not support iframes.</p></b>
</iframe></center>
<p>
  <button class="btn btn-lg btn-danger btn-block form-signin" id="send">Send Message</button>
</p>
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
 <tr><td>1</td><td>In the java scripts search for the presence of window.attachEvent method with event type set as "onmessage" or window.addEventListener method with event type set as "message". Then check whether handler or listener method has a validation check for the message origin.</td><td>Anywhere in the application</td><td><b>Lack of origin validation:</b>
<br/><br/>
window.addEventListener(“message”, callback, true);
<br/><br/>
function callback(e) {<br/><br/>
     /* process message (e.data) */<br/><br/>
}<br/><br/>
</td><td>Unsafe</td></tr>
 <tr><td>2</td><td>In the java scripts search for the presence of window.attachEvent method with event type set as "onmessage" or window.addEventListener method with event type set as "message". Then check whether handler or listener method has a validation check for the message origin.</td><td>Anywhere in the application</td><td><b>Improper origin validation:</b>
<br /><br />
window.addEventListener(“message”, callback, true);<br /><br />

function callback(e) {<br /><br />
     </b>if(e.origin.indexOf(".domain.com")!=-1) {</b><br /><br />
          /* process message (e.data) */<br /><br />
     }<br /><br />
}<br /><br />

</td><td>Safe</td></tr>
 <tr><td>3</td><td>In the java scripts search for the presence of window.attachEvent method with event type set as "onmessage" or window.addEventListener method with event type set as "message". Then check whether handler or listener method has a validation check for the message origin.</td><td>Anywhere in the application</td><td><b>Proper origin validation:</b>
<br/></br>
window.addEventListener(“message”, callback, true);
<br/></br>
function callback(e) {<br/></br>
     if(e.origin === "trusted.domain.com") {<br/></br>
          element.innerHTML= e.data;<br/></br>
     }<br/></br>
}<br/></br>

</td><td>Safe</td></tr>
</table>


 <?php 
 include('bottom.php')
 ?>