

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
<p>Flash is a software platform which is used for developing animation, rich internet applications and games that can be viewed or executed in Flash Player enabled browsers. Flash applications use Actionscripts, if these scripts are not written securely then it could introduce vulnerabilities in the Flash applications. </p>
<p>
In flash applications if action scripts use one of the following methods with flashvar arguments (uninitialized parameters) then it may be possible to perform XSS attacks on the application:
</p>
<p>•	loadVariables() </p>
<p>•	loadMovie()</p>
<p>•	getURL() or NavigateToURL()</p>
<p>•	loadMovie()</p>
<p>•	loadMovieNum()</p>
<p>•	FScrollPane.loadScrollContent()</p>
<p>•	LoadVars.load </p>
<p>•	LoadVars.send </p>
<p>•	XML.load ()</p>
<p>•	LoadVars.load ()</p> 
<p>•	Sound.loadSound(); </p>
<p>•	NetStream.play();  </p>
<p>•	OBJECT.external.ExternalInterface.call("eval", cmd); </p>

 </div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case</div>
  <div class="panel-body">
Can uninitialized variables and action-script methods be used for performing XSS?</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-danger"> High</span></p>
<br><hr />


<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center>

<h1> You Have Been Redirected to Home!</h1>
<div class="alert alert-success" role="alert">Look Closely in Traffic...</div>
</div>


<div>Tools Required:
<span class="label label-default">Burp Suite</span>
<span class="label label-default">Flare</span>
<span class="label label-default">SWF Scan</span></div>
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
 <tr><td>1</td><td>Decompile the SWF file using the tools mentioned above and identify the flashvars. These flashvars can be overwritten using query string parameters. Example:<br />http://victim/file.swf?varname=value  <br >Now check if such flashvars are used within any of the methods listed above. For example, <br />if  flashvars are used in GetURL() as: getURL(_root.URI,'_targetFrame'); Here, root.URI is the flashvar that can be overwritten by supplying it's value as query string parameter. </td><td>SWF sink</td><td>Inject a javascript in the identified flashvar and see if script is getting executed. Example: http://victim/file.swf?URI=javascript:evilcode</td><td>Unsafe</td></tr>
 <tr><td><center>""</center></td><td><center>""</center></td><td><center>""</center></td><td>Absence of flashvar or if script injection is not possible.</td><td>Safe</td></tr>
 <tr><td>2</td><td>If the application uses a method like <br /> " loadMovie(_root.URL)" then URL flashvar can be used to inject execute arbitrary actionscript methods via special protocol "asfunction" which would eventually lead to XSS. For example, <br /> http://victim/file.swf?URL=asfunction:getURL,javascript:evilcode</td><td><center>""</center></td><td>Successful script execution</td><td>Unsafe</td></tr>
 <tr><td><center>""</center></td><td><center>""</center></td><td><center>""</center></td><td>failed script execution</td><td>Safe</td></tr>
</table>





 
 <?php 
 include('bottom.php')
 ?>