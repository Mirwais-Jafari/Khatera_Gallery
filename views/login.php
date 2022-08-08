<!DOCTYPE html>
<html>
<head>
	<title> Log in | Khatera Gallery</title>
</head>
<?php require("header.php"); ?>
<div style="margin: auto;max-width: 600px;width:100%;padding: 2em;">
		<h2 class="col-6 tm-text-primary"> Login </h2>
		<form method="POST" action="../controllers/login_exec.php">
		  <div class="form-group">
		    <label for="email">Email address</label>
		    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input name="pwd" type="password" class="form-control" id="password" placeholder="Password" required>
		  </div>
		  <button type="submitLogin" class="btn btn-primary">Submit</button>
		</form>
</div>
<?php require("footer.php"); ?>
