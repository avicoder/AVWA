<?php
include('session.php');
?>
<?php
include('top.php');
?>
<div class="profile">
<div class="alert alert-success" role="alert">Login Successful</div>
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout" class="pull-right" style="text-decoration:none"><a href="logout.php"><span class="label label-success">Logout</span></a></b>
<hr/>
<i class="fa fa-user fa-5x"></i>

</div>
 
 <?php 
 include('bottom.php')
 ?>
