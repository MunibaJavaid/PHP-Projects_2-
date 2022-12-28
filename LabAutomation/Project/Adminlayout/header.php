<!DOCTYPE html>
<html lang="en">
<head>
<?php include '../confiq/authorizeadmin.php';?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/spur.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="assets/js/chart-js-config.js"></script>
 
</head>
<body>
<div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="index.php" class="spur-logo"><span>LabAutomation</span></a>

            </header>
                

            <nav class="dash-nav-list">
                <a href="index.php" class="dash-nav-item">
                    <i class="fas fa-home"></i> Dashboard </a>
                
                 <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-chart-bar"></i> Add Tester User </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="AddTesterUser.php" class="dash-nav-dropdown-item">Add Testers</a>
                    </div>
                     <div class="dash-nav-dropdown-menu">
                        <a href="viewusers.php" class="dash-nav-dropdown-item">View Testers</a>
                    </div>
                </div>
                                 <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-chart-bar"></i>Products </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="product.php" class="dash-nav-dropdown-item">Add Products</a>
                    </div>
                     <div class="dash-nav-dropdown-menu">
                        <a href="viewproduct.php" class="dash-nav-dropdown-item">View Products</a>
                    </div>
                </div>
                <hr>
                <a href="index.html" class="spur-logo ml-4 mb-4"><span>Company Testing</span></a>
                
                <a href="companyremark.php" class="dash-nav-item">
                    <i class="fas fa-clipboard-list"></i> Company Remarks </a>
                
                <a href="labremark.php" class="dash-nav-item">
                    <i class="fas fa-clipboard-list"></i> Labortary Remarks </a>

                    <a href="profile.php" class="dash-nav-item">
                    <i class="fas fa-user-alt"></i> Profile</a>
            </nav>
        </div>
        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="#!" class="searchbox-toggle">
                    <i class="fas fa-search"></i>
                </a>
            
                <div class="tools">
                   
                    
                    <div class="dropdown tools-item">
                        <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="profile.php">Profile</a>
                            <a class="dropdown-item" href="../confiq/logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </header>
     
