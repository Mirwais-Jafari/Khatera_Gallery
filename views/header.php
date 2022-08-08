<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Khatera gallery </title>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/khatera_orange.jpg">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/templatemo-style.css">
</head>
<?php
session_start(); 
?>
<body style="background-color:#F5F5F9">
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <nav class="navbar navbar-expand-lg" style="background-color:#F5F5F5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../assets/img/khatera_white.jpg" width="100px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
            aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1" aria-current="page" href="index.php">Photos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-3 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="category.php?type=nature">Nature</a></li>
                    <li><a class="dropdown-item" href="category.php?type=girl">Girl</a></li>
                    <li><a class="dropdown-item" href="category.php?type=boy">Boy</a></li>
                    <li><a class="dropdown-item" href="category.php?type=photography">Photography</a></li>
                    <li><a class="dropdown-item" href="category.php?type=computer">Computer</a></li>
                    <li><a class="dropdown-item" href="category.php?type=programming">Programming</a></li>
                    <li><a class="dropdown-item" href="index.php">Others</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2" href="uploadImage.php">Upload Image</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3"  href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="contact.php">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-3 dropdown-toggle" href="#" id="navbarDropdown"
                     role="button" data-toggle="dropdown" aria-expanded="false"> Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="login.php">login</a></li>
                        <li><a class="dropdown-item" href="signup.php">signup</a></li>
                        <li><a class="dropdown-item" href="../controllers/logout.php">log out</a></li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>