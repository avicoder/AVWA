<?php 
error_reporting(0);
@ini_set('display_errors', 0);?>

<!DOCTYPE html>
<html style="cursor: auto ! important;" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Advanced Vulnerable Application">
    <meta name="author" content="avicoder">

    <title>AVWA | Paladion</title>

    <link rel="shortcut icon" type="image/ico" href="http://avicoder.me/img/favicon.ico" />
    <link href="bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <style type="text/css">
	/* make sidebar nav vertical */ 
	@media (min-width: 768px) {
	  .sidebar-nav .navbar .navbar-collapse {
		padding: 0;
		max-height: none;
	  }
	  .sidebar-nav .navbar ul {
		float: none;
	  }
	  .sidebar-nav .navbar ul:not {
		display: block;

	  }
	  .sidebar-nav .navbar li {
		float: none;
		display: block;
	  }
	  .sidebar-nav .navbar li a {
		padding-top: 12px;
		padding-bottom: 12px;
	  }
	}
	@media (min-width: 768px) {
	  /* uncomment if you would like the menu to be fixed */
	  /* .navbar {
		  position: fixed;
		  width: 170px;
		  z-index: 2;
	  } */
	}
	@media (min-width: 992px) {
	  .navbar {
		  width: 212px;
	  }
	}
	@media (min-width: 1200px) {
	  .navbar {
		  width: 262px;
	  }
	}
	.sidebar-nav .navbar-header{ float: none; }
</style>


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
    
		<div class="row">
        	<div class="col-xs-12"><h1><span class="label label-primary"><i class="fa fa-hand-o-right"></i>          Another Vulnerable Web Application	(AVWA)</span></h1></div>
        </div>    
<hr />
		<div class="row">
          <div class="col-sm-3">
                        <div class="sidebar-nav">
              <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <span class="visible-xs navbar-brand">Sidebar menu</span>
                </div>
                <div class="navbar-collapse collapse sidebar-navbar-collapse">
                  <ul class="nav navbar-nav">
                    <li ><a href="/Labs/index.php">HOME</a></li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >User Credential Enumeration <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-header">Login Page</li>
                          <li ><a href="/Labs/1/case-1/index.php">Redirected Page</a></li>
                          <li><a href="/Labs/1/case-2/index.php">HTTP status</a></li>
                          <li class="divider"></li>
                          <li class="dropdown-header">Registration Page</li>
                          <li><a href="/Labs/1/case-3/index.php">Generated Password Strength</a></li>
                        </ul>
                      </li>
											
					<li><a href="/Labs/2/index.php">Session Puzzling</a></li>
						<li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cross Site Scripting <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-header ">XSS : HTML & JavaScript</li>
                          <li  ><a href="/Labs/3/case-1/index.php">HTML attributes</a></li>
                          <li><a href="/Labs/3/case-2/index.php">HTML Tags</a></li>
                          <li><a href="/Labs/3/case-3/index.php">CSS Injection</a></li>
                          <li><a href="/Labs/3/case-4/index.php">Relative path override</a></li>
                          <li class="active"><a href="/Labs/3/case-5/index.php">DOM XSS</a></li>
                          <li class="divider"></li>
                          <li class="dropdown-header">Flash Based XSS</li>
                          <li><a href="/Labs/3/case-6/index.php">Flash Vars</a></li>
                          <li><a href="/Labs/3/case-7/index.php">Page Redirection</a></li>
                       </ul>
                      </li>
						<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sensitive Information Disclosure<b class="caret"></b></a>
                        <ul class="dropdown-menu">
 <li class="dropdown-header">Anywhere on the site</li>
                                                  
						 <li><a href="/Labs/4/case-1/index.php">HTML Meta Tag</a></li>
                          <li><a href="/Labs/4/case-2/index.php">Archives </a></li>
                          <li><a href="/Labs/4/case-3/index.php">Backup Files</a></li>
                          <li class="divider"></li>
                          <li class="dropdown-header">Page with sessions</li>
                          <li><a href="/Labs/4/case-4/index.php">HTML5 Local Data storage</a></li>
                        </ul>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Server side Code Execution<b class="caret"></b></a>
                        <ul class="dropdown-menu">
 <li class="dropdown-header">File Inclusion</li>
                                                  
						 <li><a href="/Labs/5/case-1/index.php">Local File Inclusion</a></li>
                          <li><a href="/Labs/5/case-2/index.php">Remote File Inclusion </a></li>
                          <li class="divider"></li>
                          <li class="dropdown-header">Direct Command Execution</li>
                          <li><a href="/Labs/5/case-3/index.php">Blind Command Injection</a></li>
                        </ul>
                      </li>
			
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">XPath Injection <b class="caret"></b></a>
                        <ul class="dropdown-menu">
 <li class="dropdown-header">Login/Registration Page</li>
                                                  
						 <li><a href="/Labs/6/case-1/index.php">Error Generation</a></li>
                          <li><a href="/Labs/6/case-2/index.php"> Bypass Login </a></li>
                          <li class="divider"></li>
                          <li class="dropdown-header">Search Page</li>
                          <li><a href="/Labs/6/case-3/index.php">Blind XPath Injection</a></li>
                          <li><a href="/Labs/6/case-4/index.php">Guessing Parent Node</a></li>
                        </ul>
                      </li> 
					  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">XML Injection <b class="caret"></b></a>
                        <ul class="dropdown-menu">
						<li class="dropdown-header">Error Generation</li>
                		 <li><a href="/Labs/7/case-1/index.php">Angular Parenthesis </a></li>
                          <li><a href="/Labs/7/case-2/index.php"> Single/Double Quotes </a></li>
                          <li><a href="/Labs/7/case-3/index.php"> Ampersand </a></li>
                          <li><a href="/Labs/7/case-4/index.php"> CDATA section </a></li>
                          <li class="divider"></li>
                          <li><a href="/Labs/7/case-5/index.php">XML eXternal Entity Attack (XXE)</a></li>
                          <li class="divider"></li>
                          <li><a href="/Labs/7/case-6/index.php">Tag injection</a></li>
						  </ul>
                      </li>
					  <li><a href="/Labs/8/index.php">HTTP Parameter Pollution</a></li>
					  
						 <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">CORS exploitation <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                		 <li><a href="/Labs/9/index.php">CORS Origin Check </a></li>
                          <li><a href="/Labs/9/index.php"> Access-Control-Allow-Origin Header </a></li>
                          
						  </ul>
                      </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Web Messaging Vulnerability <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                		 <li><a href="/Labs/10/index.php">Origin Validation </a></li>
                          
						  </ul>
                      </li>	
					  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Web Socket Vulnerability <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                		 <li><a href="/Labs/11/case-1/index.php">Origin Header </a></li>
                		 <li><a href="/Labs/11/case-2/index.php">SSL Implementation Check </a></li>
                		 <li><a href="/Labs/11/case-3/index.php">Authentication & Authorization</a></li>
                		 <li><a href="/Labs/11/case-4/index.php">Input Sanitization</a></li>
                          
						  </ul>
                      </li>		  
					  
					  <li><a href="/Labs/12/case-1/index.php">Privileged Provisioning Bypass</a></li>
					  </li>	
					  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Directory Transversal  FIle Upload<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                		 <li><a href="#">Privilege Escalation </a></li>
                		 <li><a href="#">Full Path Disclosure</a></li>
						  </ul>
                      </li>		  
			                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </div>
          </div>
          <div class="col-sm-9">
		  