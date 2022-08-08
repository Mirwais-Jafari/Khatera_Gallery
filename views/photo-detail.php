<!DOCTYPE html>
<html>
<head>
	<title>Photo details | Khatera Gallery</title>
</head>
<?php 

include("../config/connection.php");
require("header.php");
$sql = "SELECT * FROM images WHERE id='33' ";
$run_query = mysqli_query($conn,$sql);
$row = $run_query->fetch_assoc();
$title = $row["title"];
$src = $row["photo"];
$id = $row["id"];
$views = $row["views"];
$date = $row["date"];
?>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="../assets/img/khatera_white.jpg">
        <form class="d-flex tm-search-form" action="search.php" method="get">
            <input name="q" class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary"> <?php echo $title; ?> </h2>
        </div>
        <div class="row tm-mb-90">            
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                <img src="<?php echo $src;?>" alt="Image" class="img-fluid">
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="tm-bg-gray tm-video-details">
                    <p class="mb-4">
                        <?php 
                        echo "Name: ".$title."<br>";
                        echo "Source: ".$src."<br>";
                        echo "Views: ".$views."<br>";
                        echo "Date issued: ".$date."<br>";
                        ?>
                    </p>
                    <div class="text-center mb-5">
                        <a href="#" class="btn btn-primary tm-btn-big">Download</a>
                    </div>                    
                    <div class="mb-4 d-flex flex-wrap">
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Dimension: </span><span class="tm-text-primary">1920x1080</span>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Format: </span><span class="tm-text-primary">JPG</span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h3 class="tm-text-gray-dark mb-3">License</h3>
                        <p>Free for both personal and commercial use. No need to pay anything. No need to make any attribution.</p>
                    </div>
                    <div>
                        <h3 class="tm-text-gray-dark mb-3">Tags</h3>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Cloud</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Bluesky</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Nature</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Background</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Timelapse</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Night</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Real Estate</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">
                Related Photos
            </h2>
        </div>
        <div class="row mb-3 tm-gallery">
        <?php
            $photos = "SELECT * from images WHERE title='$title'";
            $run_query = mysqli_query($conn, $photos);
            while ($row = $run_query->fetch_assoc()) {
       ?>
        	<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="../uploads/<?php echo $row["photo"]; ?>" alt="<?php echo $row['title'];?>" 
                    class="img-fluid" style="width:420px;height:236px;object-fit:cover;">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2> <?php echo $row["title"]; ?> </h2>
                        <a href="photo-detail.php">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light"><?php echo $row["date"];?></span>
                    <span> <?php echo $row["views"];?> views</span>
                </div>
            </div>
            <?php 
            }
            ?>    
        </div>
    </div>

 <?php require("footer.php"); ?>