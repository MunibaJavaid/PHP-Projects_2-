<?php include 'header.php'; ?>
<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    </head>
<?php include '../includes/patient_authorized.php'; ?>
<?php include '../includes/connection.php'; ?>


<script type="text/javascript">
    function fetch_select(val) {
        $.ajax({
            type: 'post',
            url: 'fetchVaccPricedata.php',
            data: {
                get_option: val
            },
            success: function(response) {
                document.getElementById("new_select").value = response;
            }
        });
    }
</script>   
<main class="page-content">
<div class="title" style="background-color: white; padding: 10px 15px;">
    <h3> Book Appointment <i class="fa-solid fa-house-medical"></i> </h3>
</div>
<form action="appointment.php" method="post" enctype="multipart/form-data" name="formid">
    <div class="container">
        <!-- code here -->
        <div class="card">
            <div class="card-image">
                <h2 class="card-heading">
                    Book Appointment
                    <small>For You And Your Family</small>
                </h2>
            </div>
            <form class="card-form">
                <div class="input">
                    <input type="text" class="input-field" name="name" value="<?= $_SESSION['db_Name'] ?>" required />
                    <label class="input-label">Patient Name:</label>
                </div>
                <?php $Date = date('Y-m-d'); ?>
                <div class="input">
                    <input type="date" class="input-field" id="datepicker" name="dates" value="<?= $Date ?>" required />
                    <label class="input-label">Date/Time:</label>
                </div>
                <div class="input">
                    <input type="text" class="input-field" name="address" required />
                    <label class="input-label">Address:</label>
                </div>
                <div class="input">
				<!-- <input type="password" class="input-field" name="address" required/> -->
                
                <select class="input-field" id="cat" name="hospital">
                            <option value="" disabled selected></option>
                            <!-- Get dropdown data code -->
                            <?php
                            $query = 'select * from hospitaldetail';
                            $rs = mysqli_query($con, $query);
                            if (mysqli_num_rows($rs) > 0) {
                                while ($data = mysqli_fetch_array($rs)) { ?>
                                    <option value="<?= $data['Hosid'] ?>"><?= $data['Name'] ?></option>
                                <?php }
                            } else {
                                ?>
                                <option>NO records Found</option>
                            <?php
                            }
                            ?>

                        </select>
				<label class="input-label">Select Hospital:</label>
			</div>
            <div class="input">
				<!-- <input type="password" class="input-field" name="address" required/> -->
                <select id="myDropDown" class="input-field" name="Vacc" class="vacc" onchange="fetch_select(this.value);">
                            <option value="" disabled selected></option>
                            <!-- Get dropdown data code -->
                            <?php
                            $query = 'select * from vaccination';
                            $res = mysqli_query($con, $query);
                            if (mysqli_num_rows($res) > 0) {
                                while ($data = mysqli_fetch_array($res)) { ?>
                                    <option value="<?= $data['Vacid'] ?>"><?= $data['NameVac'] ?></option>
                                <?php }
                            } else {
                                ?>
                                <option>NO records Found</option>
                            <?php
                            }
                            ?>

                        </select>
				<label class="input-label">Select Vaccine:</label>
			</div>
            <div class="input">
				<input type="text" class="input-field" id="new_select"  name="Fees" required/>
				<label class="input-label">Fees:</label>
			</div>
            <div class="input">
				<input type="text" class="input-field" name="contact" required/>
				<label class="input-label">Contact:</label>
			</div>
            <div class="input">
				<input type="text" class="input-field" name="cnic" required/>
				<label class="input-label">CNIC:</label>
			</div>
                <div class="action">
                    <button type="submit" class="action-button" name="ins">BOOK</button>
                </div>
            </form>
            <div class="card-info">
                <p>By signing up you are agreeing to our <a href="#">Terms and Conditions</a></p>
            </div>
        </div>
    </div>
    </form>
</main>


<?php if (isset($_POST['ins'])) {
    $PatName = $_POST['name'];
    $Dates = $_POST['dates'];
    $Addres = $_POST['address'];
    $Hosid = $_POST['hospital'];
    $Fee = $_POST['Fees'];
    $Vaccid = $_POST['Vacc'];
    $Contact = $_POST['contact'];
    $cnic = $_POST['cnic'];
    $query = "insert into appointment(Hosid,Patid,Datee,Fee,Vacid,cnic,contact) values ('$Hosid','$PatName','$Dates','$Fee','$Vaccid','$cnic','$Contact')";
    $res = mysqli_query($con, $query);
    if ($res) {
        echo "<script>alert('Data Inserted Successfully');window.location.href = 'viewAppointment.php';</script>";
    } else {
        echo "<script>alert('Data Insertion Failed')</script>";
    }
} ?>