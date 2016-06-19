

<?php
include('top.php');
?>

<div class="panel  panel-info">
  <div class="panel-heading"><i class="fa fa-eye-slash"></i>  Threat</div>
  <div class="panel-body">
An adversary can conduct an XML Injection attack</div>
</div>

<div class="panel  panel-warning">
  <div class="panel-heading"><i class="fa fa-quote-left"></i>  Brief Description</div>
  <div class="panel-body">
This test case is used to check how the application reacts when XML meta characters are supplied as the payload for a functionality that parse the user input into an XML data. A typical example would be registration functionality in an application that accepts user input and stores the entered values in an XML format. <br/><br/>

All the XML files need to be well formed to be accessed by an application. If the XML structure is not well formed (an example will be an XML document with a tag that is not closed or an XML document with an extra single quote in the attribute value), the parsers will throw an error. The first step in identifying XML injection is to generate parser errors with the help of the meta-characters mentioned below.<br/>

•	Single Quote (')<br/>
•	Double Quote (")<br/>
•	Angular Parenthesis (&lt; )<br/>
•	Comment tag: &lt;!---/--&gt;<br/>
•	Ampersand: & <br/>
•	CDATA section delimiters: ]]><br/>
•	Closing child element tags of a SOAP request: &lt;/SOAPENV:BODY&gt; and &lt;/SOAPENV:ENVELOPE&gt;<br/>



  
  </div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-INPVAL-008</span></div>
  <div class="panel-body">
Simple attack pattern using XML Meta-characters to identify XML Parser errors.

</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-danger"> High</span></p>
<br><hr />

<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center>

      <form class="form-signin" action="" method="post">
        <center><h3 class="form-signin-heading">XML injection CDATA  </h3></center>
        <label for="inputEmail" class="sr-only">Inject Here</label>
        <input type="text`" id="inputEmail" class="form-control" placeholder="Inject here"  name="inject_string" required autofocus><br />
        <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" >Inject</button></form>
	<span><?php

$xmldata = '<?xml version="1.0" encoding="ISO-8859-1"?>
<!DOCTYPE xmlfile [  
<!ENTITY author "avicoder" >]>
<xmlfile>
 <info attrib="Inject2">
  <data>Inject1</data>
 </info>
 <data>
	<![CDATA[Inject3]]>
 </data>
</xmlfile>
';
if(isset($_REQUEST['submit'])){
				$displayxml = str_replace('Inject3', '<span style="color:red"> '.htmlentities($_REQUEST['inject_string']).'</span>', htmlentities($xmldata));
				$xmldata = str_replace('Inject3', $_REQUEST['inject_string'], $xmldata);
				$displayxml = nl2br($displayxml, false);	
				echo "<br/><div class='panel panel-primary'>
  <div class='panel-heading'>
    <h3 class='panel-title'>Resulting XML</h3>
  </div>
  <div class='panel-body'>
  " . $displayxml . '</div></div>';
				$xml = '';
				$xml = simplexml_load_string($xmldata,'SimpleXMLElement',0);
				echo '<b>Results:</b><div class="alert alert-danger" role="alert">';
				foreach ($xml->data as $data){
				echo ''.$data;
				echo "</div>";
					
					}
			}
?>
</span>
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
 <tr><td>1</td><td>Submit XML meta characters as the payload to an input field.</td><td>Any page that generates a query, or generates and creates data, like user registration, address details, etc. Typically pages that use web service calls</td><td>The application responds with an error message that reveals XML parser-related information. </td><td>Unsafe</td></tr>
 <tr><td>2</td><td>Submit XML meta characters as the payload to an input field.</td><td>Any page that generates a query, or generates and creates data, like user registration, address details, etc. Typically pages that use web service calls</td><td>The application either blocks the request or considers the payload as string and renders the result accordingly. </td><td>Safe</td></tr>
</table>


 <?php 
 include('bottom.php')
 ?>