

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
<p>It is very common, and even recommended, for programmers to include detailed comments and metadata on their source code. However, comments and metadata included into the HTML code might reveal internal information that should not be available to potential attackers. Comments and metadata review should be done in order to determine if any information is being leaked.</p>

 </div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-INFO-005</span></div>
  <div class="panel-body">
Does HTML META tag contains sensitive information?.</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-warning"> Medium</span></p>
<br><hr />


<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center>

<table class="table">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Application</th>
                <th>Keyword</th>
            </tr>
        </thead>
        <tbody>
        	<tr class="danger">
                <td>1</td>
                <td>Wordpress</td>
                <td>&lt;meta name="generator" content="WordPress 3.9.2" /&gt;</td>
            </tr>
            <tr class="success">
                <td>2</td>
                <td>phpBB </td>
                <td>&lt;body id="phpbb"</td>
            </tr>
            <tr class="info">
                <td>3</td>
                <td>Mediawiki</td>
                <td>&lt;meta name="generator" content="MediaWiki 1.21.9" /&gt;</td>
            </tr>
            <tr class="warning">
                <td>4</td>
                <td>Joomla</td>
                <td>&lt;meta name="generator" content="Joomla! - Open Source Content Management" /&gt;</td>
            </tr>
         
			<tr class="success">
                <td>5</td>
                <td>Drupal</td>
                <td>&lt;meta name="Generator" content="Drupal 7 (<a rel="nofollow" class="external free" href="http://drupal.org">http://drupal.org</a>)" /&gt;
</td>
            </tr>
        </tbody>
    </table>
	
	<p>Look into OWASP website Source code <a href="https://owasp.org" target ="_blank"> OWASP</a> </p> 
</div>


<div>Tools Required:
<span class="label label-default">Burp Suite</span>
<span class="label label-default">Any Browser</span>
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
 <tr><td>1</td><td>Look into HTML/Javascript source code for - SQL, password, server path, and any other server information.Use Regex patterns in the BURPSuite intruder response filtering function</td><td>Any HTML page or javascript</td><td>SQL queries,Passwords And / or usernames</td><td>unsafe</td></tr>
 <tr><td>2</td><td>Find Robots.txt, server information and other information via meta tags.Look for regex with META keyword in BurpSuite intruder responses</td><td>Any HTML page or javascript</td><td>Server name, refresh url, search keywords, robots</td><td>Review based on information disclosed</td></tr>
</table>





 
 <?php 
 include('bottom.php')
 ?>