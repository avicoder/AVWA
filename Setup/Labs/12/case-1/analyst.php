<a href="edit.php"><span class="label label-warning">Go to Analyst Panel</span></a>

<ul class="list-group">
  <li class="list-group-item list-group-item-info"><span class="pull left"><strong>Username</strong></span> <span class="pull-right"><?php echo $login_session; ?></span></li>
  <li class="list-group-item list-group-item-warning"><span class="pull left"><strong>Role</strong></span> <span class="pull-right"><?php echo $login_role; ?></span></li>
  <li class="list-group-item list-group-item-info"><span class="pull left"><strong>Name</strong></span> <span class="pull-right"><?php echo $login_firstname; ?></span></li>
  <li class="list-group-item list-group-item-warning"><span class="pull left"><strong>Phone Number</strong></span> <span class="pull-right"><?php echo $login_phone; ?></span></li>
</ul>


<a href="logout.php"><span class="label label-danger pull-right">Log Out</.span></a>