<?php
error_reporting(0);
@ini_set('display_errors', 0);
?>

<?php
$result = '';
if(isset($_POST['submit'])){
$doc = new DOMDocument;
$doc->load('emp.xml');
$xpath = new DOMXPath($doc);
$query = $_POST['query'];
$result = $xpath->evaluate($query);
}
?>
<?php
include('top.php');
?>

<div class="panel  panel-info">
  <div class="panel-heading"><i class="fa fa-eye-slash"></i>  Threat</div>
  <div class="panel-body">
An adversary can conduct an XPATH Injection attack</div>
</div>

<div class="panel  panel-warning">
  <div class="panel-heading"><i class="fa fa-quote-left"></i>  Brief Description</div>
  <div class="panel-body">
  
This test case is used to enumerate the XML structure when the application does not display stack trace on the browser. Similar to Blind SQL injection count, string-length and substring functions can be used to enumerate the count of the xml nodes and value of a particular node. <br /><br />

Consider the scenario where the application has a search feature and is vulnerable to XPATH injection. <br /><br />

The following payload will return the count of child nodes under the user node of the XML structure.<br /><br />

‘ OR count(//user/child::node()) or ‘a’=’a<br /><br />

The following payload will help to find out whether the value of the second child node consists of 6 characters.<br /><br />

‘ OR string-length(//user[position()=1]/child::node()[position()=2])=6 or ‘a’=’a<br /><br />

The following payload will confirm or deny whether the first character of the second child node has an "a" character<br /><br />

‘ OR substring((//user[position()=1]/child::node()[position()=2]),1,1)="a" or ‘x’=’x<br /><br />

 
   </div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-INPVAL-010</span></div>
  <div class="panel-body">
BLIND XPATH injection to identify XML document structure with the help of count() and substring () XPATH expression.
</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-danger"> High</span></p>
<br><hr />

<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center>

      <form class="form-signin" action="" method="post">
        <h2 class="form-signin-heading">Search Engine</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="name" id="inputEmail" class="form-control" placeholder="Search.."  name="query" required autofocus ><br />
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" >Hit me !</button> 
		<br/>
		<div class="alert alert-success" role="alert"><center><span>
		
		<?php
if($result){
  foreach ($result as $row){
    echo $row->textContent."<br/><br/>";
  }
echo $result;
}
?>
		
		</span></center></div>

      </form>
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
 <tr><td>1</td><td>Submit the count function as mentioned above.</td><td>Any page that generates a query, e.g. Search or View Item using ItemId.
Typically pages that make web service call.


</td><td>The application responds with the count of the nodes</td><td>Unsafe</td></tr> 
<tr><td>2</td><td>Submit the count function as mentioned above.</td><td>Any page that generates a query, e.g. Search or View Item using ItemId.
Typically pages that make web service call.


</td><td>The application either blocks the request or considers payload as a string and renders result accordingly.</td><td>Safe</td></tr>

 <tr><td>3</td><td>Submit Substring or string-length function as payload</td><td>Any page that generates a query, e.g. Search or View Item using ItemId.
Typically pages that make web service call.


</td><td>The application returns behave differently when the these functions return true or false values</td><td>Unsafe</td></tr> 
<tr><td>3</td><td>Submit Substring or string-length function as payload</td><td>Any page that generates a query, e.g. Search or View Item using ItemId.
Typically pages that make web service call.


</td><td>The application either blocks the request or considers payload as a string and renders result accordingly.</td><td>Safe</td></tr>
</table>



 <?php 
 include('bottom.php')
 ?>