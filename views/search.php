<?php
include_once("../config/connection.php");
require "header.php";
$title = $_REQUEST['q'];
?>
        <div class="row tm-mb-90 tm-gallery">
        <?php
            $photos = "SELECT * from images WHERE title = '$title'";
            $result = mysqli_query($conn, $photos);
            if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
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
            }}else{?>
            <p>Sorry we cann't find anything about <?php echo $title;?>!</p>
            <?php
            }
            ?>  
        </div> 
    </div>
<?php require("footer.php"); ?>