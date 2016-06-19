

<?php
include('top.php');
?>

<div class="panel  panel-info">
  <div class="panel-heading"><i class="fa fa-eye-slash"></i>  Threat</div>
  <div class="panel-body">
Fingerprint the web application, framework and libraries versions used by the application to discover known vulnerabilities.
 </div>
</div>

<div class="panel  panel-warning">
  <div class="panel-heading"><i class="fa fa-quote-left"></i>  Brief Description</div>
  <div class="panel-body">
<p>Determining how web servers handle requests corresponding to files having different extensions may help in understanding web server behaviour depending on the kind of files that are accessed. For example, it can help to understand which file extensions are returned as text or plain versus those that cause execution on the server side. The latter are indicative of technologies, languages or plugins that are used by web servers or application servers, and may provide additional insight on how the web application is engineered. File extensions provides the penetration tester useful information about the underlying technologies used in a web appliance and greatly simplifies the task of determining the attack scenario to be used on particular technologies. In addition, misconfiguration of web servers could easily reveal confidential information about access credentials.</p>

 </div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-CONFIG-003</span></div>
  <div class="panel-body">
Is any file with the following extension accessible and contains sensitive data?</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-warning"> Medium</span></p>
<br><hr />


<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center> <br />

<div class="alert alert-info form-signin " role="alert">Spider the domain using Burp Suite or DIr Buster</div>

</div>


<div>Tools Required:
<span class="label label-default">Burp Suite</span>
<span class="label label-default">Dir Buster</span>
</div>
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
 <tr><td>1</td><td>In an ASP/ASPX application look for .asa and .inc extensions for existing pages</td><td>Apply extension to all existing page names</td><td>Any page with sensitive information like source code or database connection strings</td><td>unsafe</td></tr>
 <tr><td>2</td><td>Spider the application with known filenames and extensions. (zip,tar, gz, tgz,rar) Look for source files like .java, txt Look for documents like  .pdf, .doc, rtf, xls, ppt</td><td>Anywhere in the website</td><td>Any of these files found with sensitive files</td><td>Review based on information disclosed</td></tr>
</table>






 
 <?php 
 include('bottom.php')
 ?>