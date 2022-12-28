<?php include 'header.php'; ?>
<?php include '../includes/patient_authorized.php'; ?>
<?php include '../includes/connection.php'; ?>
<?php if (isset($_POST['up'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Pass = password_hash($Password, PASSWORD_BCRYPT);
    $emcheck = "select * from patientdetail where Email = '$Email' ";
    $patient_ID = $_SESSION['db_Name'];
    $query = "update patientdetail set Name = '$Name',Email ='$Email',Password = '$Pass'
    where Email = '$Email'";
    $res = mysqli_query($con, $query);
    if ($res) {
        echo "<script>alert('Data Inserted Successfully');window.location.href = 'patient_report.php';</script>";
    } else {
        echo "<script>alert('Data Insertion Failed')</script>";
    }
} ?>