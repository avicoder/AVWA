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

  
  
Consider a registration functionality that stores the user input in an xml file. XML parsers have a characteristic that considers only the last occurrence of a tag in an xml file. An adversary can misuse this behaviour by supplying HTML tags as user input. When the application stores this payload in an XML file, the resultant XML structure will have multiple tags with same tag name. This can result in unexpected behaviour in the application.  <br /><br />

The following payload will add an extra <role> tag in the xml file and when the file is parsed the normal user will have the privilege of an admin user.<br /><br />

&lt;user&gt;<br />
&lt;uname&gt;abc&lt;/uname&gt;<br />
&lt;pass&gt;abc123&lt;/pass&gt;<br />
&lt;role&gt;user&lt;/role&gt;<br />
&lt;address&gt;<strong>testaddress&lt;/address&gt;&lt;role&gt;admin&lt;/role&gt;&lt;address&gt;test&lt;/address&gt;</strong><br />
&lt;/user&gt;<br /><br />

When the application throws an exception related to the XML structure it might reveal information related to the XML structure as well. Hence, streamlining the attack payload is easy.


</div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-INPVAL-008</span></div>
  <div class="panel-body">
If the XML parser throws an error when meta-characters are supplied, then inject XML tags, so as to override the values of existing tags.</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-danger"> High</span></p>
<br><hr />

<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center>

      <form class="form-signin" action="" method="post">
        <center><h3 class="form-signin-heading">XML Tag Injection  </h3></center>
        <label for="inputEmail" class="sr-only">Name</label>
        <input type="text`" id="inputEmail" class="form-control" placeholder="Name"  name="name" required autofocus><br />
		<label for="inputEmail" class="sr-only">Age</label>
        <input type="text`" id="inputEmail" class="form-control" placeholder="Age"  name="age" required autofocus><br />
        <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" >Inject</button></form>
	<span><?php
ini_set('display_errors', 1);

$xmldata = '<?xml version="1.0" encoding="ISO-8859-1"?>
<!DOCTYPE xmlfile [  
<!ENTITY author "avicoder" > ]>
<bio>
 <name>
	<![CDATA[Inject1]]>
 </name>
 <admin>false</admin>
 <age>
	<![CDATA[Inject2]]>
 </age>
 
</bio>
';
if(isset($_REQUEST['submit'])){
				$displayxml = str_replace('Inject1', '<span style="color:red"> ' .htmlentities($_REQUEST['name']).'</span>'  , htmlentities($xmldata));
				$xmldata = str_replace('Inject1', $_REQUEST['name'], $xmldata);
				
				$displayxml = str_replace('Inject2', '<span style="color:red"> '.htmlentities($_REQUEST['age']).'</span>', htmlentities($xmldata));
				$xmldata = str_replace('Inject2', $_REQUEST['age'], $xmldata);
				
			
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
				foreach ($xml->name as $data){
				echo '<br>Name:'.$data;
				}
			
				foreach ($xml->age as $data){
					echo '<br>Age :'.$data;
				}
				foreach ($xml->admin as $data){
					echo '<br>Admin : <span class="label label-primary">'.$data . "</span>";
				}
							echo "</div>";

			}
//       avinash]]></name><!--
//    --><admin>True</admin><age><![CDATA[22
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