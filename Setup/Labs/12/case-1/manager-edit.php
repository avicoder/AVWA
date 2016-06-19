
<span class="label label-warning">Manager Panel</span>
<div class="alert alert-danger" role="alert">

<form action="" method="post">

<select name="account-delete" id="sel1" class="form-control">
<?php 
$sql = mysql_query("SELECT role,username FROM member");
while ($row = mysql_fetch_array($sql)){
if ($row['role']=="analyst"){
echo '<option value="'. $row['username'] .'">'. $row['username'] .'</option>';
}}
?>
</select>
<br/>
  <button class="btn btn-lg btn-danger btn-block" type="submit" name="edit" >Delete</button><br /><br/> 

</form>

<a href="profile.php"><span class="label label-primary">Back</span></a>  or  <a href="logout.php"><span class="label label-success 	">Log Out</span></a>

</div>
