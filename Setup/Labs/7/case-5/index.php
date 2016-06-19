

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
External entities force the XML parser to access the resource specified by the URI, e.g., a file on the local machine or on a remote systems. The entities are defined with the help of the &lt;!Entity&gt; tag. Entities are usually called with the help of “&” symbol.  <br /><br />

For instance, consider a scenario where the same e-mail signature needs to be added for multiple e-mails that are sent with the help of XML http requests. If the signature needs to be added to multiple XML requests, the easiest way is to create a text file that has the e-mail signature and access it whenever the signature needs to be added to the xml request. Let’s assume that the file is accessible at the following URL:
http://www.abc.com/signature.txt
<br /><br />
A sample xml request that uses the Entity tag with the file’s URL and calls it with the reference name is depicted below: <br /><br />
&lt;?xml version="1.0" encoding="ISO-8859-1"?&gt;<br />
 &lt;!DOCTYPE foo [<br />
&lt;!ELEMENT foo ANY &gt;<br />
&lt;!ENTITY XXE SYSTEM “http://www.abc.com/signature.txt”> ]&gt;<br />
&lt;foo&gt;&XXE &lt;/foo&gt;<br />
<br /><br />
This is the functionality available in many XML parsers by default. However, if a web application use parsers that allow access to External entities, an adversary might be able to download sensitive files from the server, execute malicious external files on the server or can perform denial of service to the application. To prevent this attack the parsers need to be configured to disallow external entities.

</div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-INPVAL-008</span></div>
  <div class="panel-body">
XML eXternal Entity Attacks (XXE) attacks. 
</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-danger"> High</span></p>
<br><hr />

<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center>

      <form class="form-signin" action="" method="post">
        <center><h3 class="form-signin-heading">XXE Injection  </h3></center>
        <label for="inputEmail" class="sr-only">Inject Here</label>
        <input type="text`" id="inputEmail" class="form-control" placeholder="Inject here"  name="inject_string" required autofocus><br />
        <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" >Inject</button></form>
	<span><?php
$xmldata = '<?xml version="1.0" encoding="ISO-8859-1"?>
<!DOCTYPE xmlfile [  
<!ENTITY author "Inject4" > ]>
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
				$displayxml = str_replace('Inject4', '<span style="color:red"> '.htmlentities($_REQUEST['inject_string']).'</span>', htmlentities($xmldata));
				$xmldata = str_replace('Inject4', $_REQUEST['inject_string'], $xmldata);
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
 <tr><td>1</td><td>Add an Entity tag to the XML request that refers to server’s system files like Win.ini or etc/passwd</td><td>Any page that generates a query, or generates and creates data, like user registration, address details, etc. Typically pages that use web service calls</td><td>The application responds with the content of the file.</td><td>Unsafe</td></tr>
 <tr><td>2</td><td>Add an Entity tag to the XML request that refers to server’s system files like Win.ini or etc/passwd</td><td>Any page that generates a query, or generates and creates data, like user registration, address details, etc. Typically pages that use web service calls</td><td>The application does not respond with the resource mentioned in the entity tag.</td><td>Safe</td></tr>
</table>


 <?php 
 include('bottom.php')
 ?>