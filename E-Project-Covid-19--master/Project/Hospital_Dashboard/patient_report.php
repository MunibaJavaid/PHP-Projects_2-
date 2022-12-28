<?php include 'header.php'; ?>
<?php include '../includes/connection.php'; ?>

<main class="page-content">

<div class="title" style="background-color: white; padding: 10px 15px;">
    <h3> Covid Test Report <i class="fa-solid fa-file"></i> </h3>
</div>
<div class="container"> <br>



<form action="patient_report.php" method="post" enctype="multipart/form-data" name="formid">
    <div class="container">
        <!-- code here -->
        <div class="card">
            <div class="card-image">
                <h2 class="card-heading">
                    Covid Report
                    <small>Create a Rerport</small>
                </h2>
            </div>
            <form class="card-form">
                <div class="input">
                <select id="myDropDown" class="input-field" name="name" class = "vacc"
                        onchange="fetch_select(this.value);" required>
                        <option value=""  disabled selected></option>
                            <!-- Get dropdown data code -->
                            <?php
                            $query = 'select * from patientdetail';
                            $res = mysqli_query($con, $query);
                            if (mysqli_num_rows($res) > 0) {
                                while ($data = mysqli_fetch_array($res)) { ?>
                            <option value="<?= $data['Patid'] ?>"><?= $data[
    'Name'
] ?></option>
                            <?php }
                            } else {
                                 ?>
                            <option>NO records Found</option>
                            <?php
                            }
                            ?>

                        </select>
                    <label class="input-label">Select Patient:</label>
                </div>
                <div class="input">
                <input type="text" class="input-field" id="name" placeholder="Enter Hospital Name"
                            name="hName" value="<?= $_SESSION[
                                'db_Name'
                            ] ?>" required>
                    <label class="input-label">Hospital Name:</label>
                </div>
            <div class="input">
				<!-- <input type="password" class="input-field" name="address" required/> -->
                <select id="myDropDown" class="input-field" name="vName" class="vacc" onchange="fetch_select(this.value);" required> 
                            <option value="" disabled selected></option>
                            <!-- Get dropdown data code -->
                            <?php
                            $query = 'select * from vaccination';
                            $res = mysqli_query($con, $query);
                            if (mysqli_num_rows($res) > 0) {
                                while ($data = mysqli_fetch_array($res)) { ?>
                                    <option value="<?= $data[
                                        'Vacid'
                                    ] ?>"><?= $data['NameVac'] ?></option>
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
				<input type="text" class="input-field" id="name"  name="status" required/>
				<label class="input-label">Status:</label>
            </div>
            <?php $Date = date('Y-m-d'); ?>
                <div class="input">
                    <input type="date" class="input-field" id="datepicker" name="date" value="<?= $Date ?>" required />
                    <label class="input-label">Date/Time:</label>
                </div>
            <div class="input">
				<input type="text" class="input-field" name="contact" required/>
				<label class="input-label">Contact:</label>
			</div>
            <div class="input">
				<input type="text" class="input-field" name="cnic" required/>
				<label class="input-label">CNIC:</label>
            </div>
            <div class="input">
				<input type="text" class="input-field" name="address" required/>
				<label class="input-label">Address:</label>
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
    $Hosid = $_POST['hName'];
    $Vaccid = $_POST['vName'];
    $Status = $_POST['status'];
    $Dates = $_POST['date'];
    $Contact = $_POST['contact'];
    $cnic = $_POST['cnic'];
    $Addres = $_POST['address'];
    $query = "insert into covid_report(Patient_Id,Hospital_Id,Vaccine_Id,Report_Status,Report_Date,Rep_Contact,Rep_CNIC,Rep_Address) values ('$PatName','$Hosid','$Vaccid','$Status','$Dates','$Contact','$cnic','$Addres')";
    $res = mysqli_query($con, $query);
    if ($res) {
        echo "<script>alert('Data Inserted Successfully');window.location.href = 'report_list.php';</script>";
    } else {
        echo "<script>alert('Data Insertion Failed')</script>";
    }
} ?>
