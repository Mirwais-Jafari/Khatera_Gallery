<!DOCTYPE html>
<html>
<head>
	<title>Photos | Khatera Gallery</title>
</head>

<?php
include_once("../config/connection.php");
require "header.php";
?>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll"
     data-image-src="../assets/img/bg4.png">
        <form class="d-flex tm-search-form" action="search.php" method ="get">
            <input name="q" class="form-control tm-search-input" id="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Latest Photos
            </h2>
        </div>

        <div class="row tm-mb-90 tm-gallery">
        <?php
            $photos = "SELECT * from images ORDER by id desc LIMIT 8";
            $run_query = mysqli_query($conn, $photos);
            while ($row = $run_query->fetch_assoc()) {
                $title = $row["title"];
                $src = $row["photo"];
                $id = $row["id"];
                $views = $row["views"];
                $date = $row["date"];       
       ?>
        	<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="../uploads/<?php echo $src; ?>" alt="<?php echo $title;?>" class="img-fluid"
                    style="width:420px;height:236px;object-fit:cover;">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2> <?php echo $title; ?> </h2>
                        <a href="photo-detail.php">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light"><?php echo $date;?></span>
                    <span> <?php echo $views;?> views</span>
                </div>
            </div>
            <?php 
            }
            ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="../assets/img/img-01-big.jpg" alt="Headphone" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2> Headphone </h2>
                        <a href="photo-detail.php">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">2022-04-02</span>
                    <span> 2390 views</span>
                </div>
            </div> 
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="../assets/img/img-03.jpg" alt="Clock" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2> Clock </h2>
                        <a href="photo-detail.php">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">2022-04-03</span>
                    <span> 7645 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="../assets/img/img-04.jpg" alt="flower" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2> Flower </h2>
                        <a href="photo-detail.php">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">2022-02-02</span>
                    <span> 98234 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="../assets/img/img-07.jpg" alt="car" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2> Car </h2>
                        <a href="photo-detail.php">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">2022-04-02</span>
                    <span> 2341 views</span>
                </div>
            </div>    
        </div> 
    </div>

<?php require("footer.php"); ?>
