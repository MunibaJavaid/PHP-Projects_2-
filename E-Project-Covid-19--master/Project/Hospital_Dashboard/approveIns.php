<?php include 'header.php'; ?>
<?php include '../includes/Hospital_authorized.php'; ?>
<?php include '../includes/connection.php'; ?>

<?php if (isset($_POST['approve'])) {
    $Name = $_POST['name'];
    $HosName = $_POST['hospId'];
    $Contact = $_POST['contact'];
    $Cnic = $_POST['cnic'];
    $ApPiD = $_POST['appId'];
    $Dates = $_POST['dates'];
    $Fee = $_POST['Fees'];
    $Vaccid = $_POST['Vacc'];
    $Status = $_POST['status'];
    $query = "update appointment set Hosid = '$HosName',Patid = '$Name',contact = '$Contact',cnic = '$Cnic',Datee = '$Dates',
    Fee = '$Fee',Vacid = '$Vaccid', StatusVac = '$Status' where AppId = '$ApPiD'";
    echo $query;
    $res = mysqli_query($con, $query);
    if ($res) {
        echo "<script>alert('Data Updated Successfully');window.location.href = 'appointment_list.php';</script>";
    } else {
        echo "<script>alert('Data not Updated');window.location.href = 'appointment_list.php';</script>";
    }
} ?>
