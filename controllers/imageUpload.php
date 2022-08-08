<?php
$connect = mysqli_connect("localhost","root","") or die("Can not connection to mysql server");
// select database
mysqli_select_db($connect,'khatera_db');
// post data
$target_folder = '../uploads/';
$target_file = $target_folder . basename($_FILES["file"]["name"]);
$title = strtolower($_POST["title"]);
$arr = array('23453','88787','12398','2345','65654','234','8765','3466','19862');
$views = rand(1283,4532);
$date = date("Y/m/d");
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	// create query
	$insert = "INSERT INTO images (id,photo,views,date,title) VALUES (null,'$target_file','$views','$date','$title')";
	// run query
	$run_insert_query = mysqli_query($connect,$insert);
	if($run_insert_query)
	{
			if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
				header('location:../views/index.php');

			} 
			else {
				echo "Sorry, there was an error uploading your file.";
			}	
	}
	else
	{
		echo mysqli_error($connect);
	}
}
?>