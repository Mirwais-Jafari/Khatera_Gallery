<?php
include_once("../config/connection.php");
require "header.php";
$title = $_GET['type'];
?>
        <div class="row tm-mb-90 tm-gallery">
        <?php
            $photos = "SELECT * from images WHERE title = '$title'";
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
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light"><?php echo $date;?></span>
                    <span> <?php echo $views;?> views</span>
                </div>
            </div>
            <?php 
            }
            ?>  
        </div> 
    </div>
<?php require("footer.php"); ?>