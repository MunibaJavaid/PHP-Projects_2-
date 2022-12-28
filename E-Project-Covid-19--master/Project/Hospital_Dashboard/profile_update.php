<?php include 'header.php'; ?>
<?php include '../includes/hospital_authorized.php'; ?>
<?php include '../includes/connection.php'; ?>
<?php if (isset($_POST['up'])) {
    $host_Id = $_SESSION['db_Id']; 
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    
    $Pass = password_hash($Password , PASSWORD_BCRYPT);
    // $emcheck = "select * from patientdetail where Email = '$Email' ";
    $patient_ID = $_SESSION['db_Name'];
    $query = "update hospitaldetail set Name = '$Name',Email ='$Email',Password = '$Pass'
    where Hosid = '$host_Id'";
    $res = mysqli_query($con, $query);
    if ($res) {
        echo "<script>alert('Data Inserted Successfully');window.location.href = 'hospital_profile.php';</script>";
    } else {
        echo "<script>alert('Data Insertion Failed')</script>";
    }
} ?>