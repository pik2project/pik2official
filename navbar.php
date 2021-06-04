<?php include 'sendemail.php';?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pantai Indah Kapuk 2</title>
    <link rel="icon" href="img/logo/logo2.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <!-- Script for Font Awesome, jquerycdn -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/jquery.counterup@2.1.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>

  </head>
  
  <body>
     <div class="loader">
        <img src="img/logo/logo1.png" width="200px" height="75px">
    </div>
    
    <!-- Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top navbarKu">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/logo/logo1.png" alt="WebLogo" height="75px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button> 

            <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="facility.php">Facilities</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About PIK2</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Projects
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="galleryhouse.php">House & House Lot</a>
                        <a class="dropdown-item" href="galleryapartment.php">Apartment</a>
                        <a class="dropdown-item" href="gallerycommercial.php">Commercial Lot</a>
                        <a class="dropdown-item" href="galleryshophouse.php">Shophouse & SOHO</a>
                        <a class="dropdown-item" href="gallerywarehouse.php">Warehouse</a>
                        <a class="dropdown-item" href="gallerygolfebony.php">Golf Island & Ebony 2</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img\globe.png" alt="photo" width="23" height="23">
                        Language
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="indexina.php">Indonesia</a>
                        <a class="dropdown-item" href="index.php">English</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

