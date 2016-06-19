



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
Is Local File Inclusion attack possible?

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
include("includes/".$_GET['state'].".php");
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
 <tr><td>1</td><td>Variables prefixed by a relative or absolute file path - 
Use a combination of directory traversal and null character sequence <p>
http://localhost:8080/data.php?path=../../../../../../etc/passwd%00  </p><p>include(./data/../../../../../../etc/passwd\0/file.php). </p>
</td><td>Any page that accepts a relative file name as an input</td><td>Exploit traverses to the /etc directory and retrieves the passwd file</td><td>Unsafe</td></tr>
 <tr><td>2</td><td>File Upload with extension check-
(Applicable mainly to PHP and perl websites only) .Upload a file that contains php code with extension .jpg. By default, the PHP interpreter doesn’t restrict the extension of a file with PHP code, it executes code contained in any file, regardless of the extension. Now to execute this file using the vulnerable PHP code, the exploit will be <br />
http://localhost:8080/data.php?path=./../images/cmd.jpg%00
</td><td>Any page that accepts a relative URL or file name as an input</td><td>Exploit executes the php code in the uploaded file</td><td>Unsafe</td></tr>
 <tr><td>2</td><td>File upload with extension, content-type and file header checks
(applicable only to php and perl)
<br/>
Create an image that will contain PHP code within its bytes. Anything inside the &lt;? and ?&gt; tags is interpreted by PHP as PHP code. Using a hexadecimal editor insert PHP code at the end of an image file and then upload the file to the server.
<br />

http://localhost:8080/data.php?path=./../images/cmd.jpg%00

</td><td>Any page that accepts a relative file name as an input

</td><td>Exploit executes the php code in the uploaded file</td><td>Unsafe</td></tr> 

<tr><td>2</td><td>Variables in HTTP request are prefixed by a fragment of a filename
include(/hr/payslip-$uid.php) <br/>

Since a fragment of a filename is prefixed, part of the file is already specified. In such cases we have to rely on how the underlying operating system treats non-existent directories.
(Applicable only to Windows and to PHP) <br/>
http://localhost:8080/file.php?id=1/../../../../win.in%00




</td><td>Any page that accepts a relative file name as an input

</td><td>Exploit traverses to the /etc directory and retrieves the win.ini file</td><td>Unsafe</td></tr>
</table>


 <?php 
 include('bottom.php')
 ?>