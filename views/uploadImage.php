<!DOCTYPE html>
<html>
<head>
	<title> Upload Image | Khatera Gallery</title>
</head>
<?php require("header.php"); ?>
<div style="background-image:url('../assets/img/bg3.png'); background-size: cover;">
    <div style="margin:auto; max-width:600px; width:100%; padding:2em;">
        <form method="post" enctype="multipart/form-data" action="../controllers/imageUpload.php">
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Image Title" required>
                <small class="form-text text-muted">Add a title to your image</small>
            </div>
            <div class="form-group">
                <input type="file" class="btn" name='file' required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Upload Image</button>
            </div>
        </form>
    </div>
</div>
<?php require("footer.php"); ?>
