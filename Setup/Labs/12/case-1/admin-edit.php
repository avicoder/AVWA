<span class="label label-warning">Admin Panel</span>
<div class="alert alert-success" role="alert">

<form  action="" method="post">

 <label for="inputEmail" class="sr-only">Username</label>
        <input type="name" id="inputEmail" class="form-control" placeholder="Username"  name="username" required autofocus><br />
        <label for="inputEmail" class="sr-only">First Name</label> 
		<input type="name" id="inputEmail" class="form-control" placeholder="First Name"  name="firstname" required autofocus><br />
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required><br/>
      
<label>Account Type</label>
  <select class="form-control" id="sel1" name="role">
    <option>Analyst</option>
    <option>Manager</option>
  </select>

<br/>
  <button class="btn btn-lg btn-success btn-block" type="submit" name="edit" >Create Account</button><br /><br/> 
</form>
<a href="profile.php"><span class="label label-primary">Back</span></a>  or  <a href="logout.php"><span class="label label-danger 	">Log Out</span></a>



</div>
