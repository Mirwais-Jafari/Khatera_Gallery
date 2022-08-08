<!DOCTYPE html>
<html>
<head>
	<title> signup | Khatera Gallery</title>
</head>
<?php require("header.php"); ?>

<div style="margin: auto;max-width: 600px;width:100%;padding: 2em;">
		<h2 class="col-6 tm-text-primary"> signup </h2>
		<form method="post" action="../controllers/register.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input name="username" type="text" class="form-control" id="username" placeholder="Enter name" required>
		    </div>
		    <div class="form-group">
		        <label for="email">Email address</label>
		        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
		    </div>
		    <div class="form-group">
		        <label for="password">Password</label>
		        <input name="pwd" type="text" class="form-control" id="password" placeholder="Password" required>
		    </div>
		    <button type="submit" class="btn btn-primary">Submit</button>
		</form>
</div>
<?php require("footer.php"); ?>
