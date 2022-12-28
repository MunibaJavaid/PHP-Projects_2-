<?php include 'header.php'; ?>
<?php include '../includes/patient_authorized.php'; ?>
<?php include '../includes/connection.php'; ?>



<head>
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets_two/css/styles.css">
</head>

<main class="page-content">
<div class="container"> <br>

<div class="title" style="background-color: white; padding: 10px 15px;">
    <h3> Home <i class="fa-solid fa-house"></i> </h3>
</div> <br>

<!-- start: BASIC EXAMPLE -->
<div class="container-fluid container-fullw bg-white">
    <div class="row">
        <div class="col-sm-4 col-lg-5">
            <div class="panel panel-white no-radius text-center">
                <div class="panel-body">
                    <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
                    <h2 class="StepTitle">Edit Profile</h2>

                    <p class="links cl-effect-1">
                        <a href="patient_profile.php">Edit : </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-lg-5">
            <div class="panel panel-white no-radius text-center">
                <div class="panel-body">
                    <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                    <h2 class="StepTitle"> Covid Report </h2>

                    <p class="cl-effect-1">
                        <a href="Reports.php">Covid_Report :</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-lg-5">
            <div class="panel panel-white no-radius text-center">
                <div class="panel-body">
                    <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
                    <h2 class="StepTitle"> Appointments</h2>

                    <p class="links cl-effect-1">
                        <a href="book-appointment.php">
                            <a href="viewAppointment.php">My Appointments :</a>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-lg-5">
            <div class="panel panel-white no-radius text-center">
                <div class="panel-body">
                    <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
                    <h2 class="StepTitle">Book Appointment</h2>
                    <p class="links cl-effect-1">
                        <a href="appointment.php">Book :</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end: SELECT BOXES -->
</div>
</div>
</div>
</div>
</main>