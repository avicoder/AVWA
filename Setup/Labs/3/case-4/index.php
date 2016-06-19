
<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<?php
include('top.php');
?>

<div class="panel  panel-info">
  <div class="panel-heading"><i class="fa fa-eye-slash"></i>  Threat</div>
  <div class="panel-body">
An adversary can perform Relative path Overwrite resulting in Cross-Site Scripting (XSS) attack.  </div>
</div>

<div class="panel  panel-warning">
  <div class="panel-heading"><i class="fa fa-quote-left"></i>  Brief Description</div>
  <div class="panel-body">
RPO (Relative Path Overwrite) is a technique to take advantage of relative URLs by overwriting their target file.  </div>
</div>
<div class="panel  panel-success">
  <div class="panel-heading"><i class="fa fa-terminal"></i>  Test Case <span class="badge pull-right">OTG-IDENT-004</span> <span class="badge pull-right">OTG-IDENT-004</span></div>
  <div class="panel-body">
Analyse the behaviour of page by appending "/ " after the absolute url in the address bar & inject the user submitted CSS  code.
 
</div>
</div>

<p class=pull-right><b>Severity:</b> <span class="label label-danger"> High</span></p>
<br><hr />

<div class="well">

<center><h2><span class="label label-info">Demo</span></h2></center>

      <form class="form-signin" action="" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="name" id="inputEmail" class="form-control" placeholder="Username"  name="username" required autofocus><br />
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required><br/>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" >Sign in</button>
		<span><?php echo $error; ?></span>

      </form>
</div>

 
<div>Tools Required:
<span class="label label-default">Burp Suite</span>
<span class="label label-default">Inspect Element</span></div>
<br /> <hr />
 <?php 
 include('bottom.php')
 ?>