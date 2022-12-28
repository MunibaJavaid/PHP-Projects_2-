<?php include 'header.php'; ?>
<?php include '../includes/Hospital_authorized.php'; ?>
<?php include '../includes/connection.php'; ?>

<script type="text/javascript">
function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: 'fetchVaccPricedata.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_select").value=response; 
 }
 });
}

</script>

<?php
    $Id = $_GET['id'];
    $query = "select * from appointment  where AppId = '$Id'";
    $res = mysqli_query($con,$query);
    $data =  mysqli_fetch_assoc($res);
?>

<main class="page-content">



<div class="container"> <br>
        <h3 class="mt-5">Approve Request</h3> <br>

        <form action="approveIns.php" method="post" enctype="multipart/form-data" name = "formid">
        <input type="hidden" value="<?= $data['AppId'] ?>" name="appId">
        <input type="hidden" value="<?= $data['Hosid'] ?>" name="hospId">
            <div class="row">

                <div class="col-sm-12 col-lg-12" style="margin-top:50px;">

                    <div class="form-group wrap-input1" style="margin: 20px 0;">
                        <label for="name">Patient Name:</label>
                        <input type="text" class="form-control input1" id="name" placeholder="Enter Your Name"
                            name="name" value = "<?= $data['Patid'] ?>" readonly>
                    </div>
                    <div class="form-group wrap-input1" style="margin: 20px 0;">
                        <label for="name">Date/Time:</label>
                        <input type="text" class="form-control input1" id="name"
                            name="dates" value = "<?= $data['Datee'] ?>">
                    </div>
                    <div class="form-group wrap-input1" style="margin: 20px 0;">
                        <label for="name">Hospital Name:</label>
                        <input type="text" class="form-control input1" id="name" placeholder="Enter Your Name"
                            name= "HossName" value = "<?= $_SESSION['db_Name'] ?>" readonly>
                    </div>
                    
                    <div class="form-group wrap-input1" style="margin: 20px 0;">
                        <label for="name">Contact:</label>
                        <input type="text" class="form-control input1" id="name"
                            placeholder="Enter Your Contact" name="contact" value="<?= $data['contact'] ?>" readonly>
                    </div>

                    <div class="form-group wrap-input1" style="margin: 20px 0;">
                        <label for="name">CNIC:</label>
                        <input type="text" class="form-control input1" id="name"
                            placeholder="Enter Your Product CNIC" name="cnic" value="<?= $data['cnic'] ?>" readonly>
                    </div>

                    <div class="form-group wrap-input1" style="margin: 20px 0;">
                        <label for="name">Status:</label>
                        <input type="text" class="form-control input1" id="name"
                            placeholder="Enter Your Product CNIC" name="status" value="<?= $data['StatusVac'] ?>">
                    </div>
                    <div class="form-group wrap-input1">
                        <label for="name">Select Vaccines:</label>
                        <select id="myDropDown" class="form-control wrap-input1" name="Vacc" class = "vacc"
                        onchange="fetch_select(this.value);" value="<?= $data['Vacid'] ?>">
                        <option value=""  disabled selected>--Select--</option>
                            <!-- Get dropdown data code -->
                            <?php
                            $query = 'select * from vaccination';
                            $res = mysqli_query($con, $query);
                            if (mysqli_num_rows($res) > 0) {
                                while ($rs = mysqli_fetch_array($res)) { ?>
                            <option value="<?= $rs['Vacid'] ?>"
                            <?php if ($data['Vacid'] == $rs['Vacid']) {
                                echo 'selected';
                            } ?>><?= $rs['NameVac'] ?></option>
                            <?php }
                            } else {
                                 ?>
                            <option>NO records Found</option>
                            <?php
                            }
                            ?>

                        </select>
                    </div>
                            
                   <!-- <label id="new_select"></label> -->
                    <div class="form-group wrap-input1" style="margin: 20px 0;">
                        <label for="name">Fees:</label>
                        <input type="text" class="form-control input1" id="new_select"
                             name="Fees" readonly value="<?= $data['Fee'] ?>">
                    </div>

                    <button type="submit" class="btn btn-success" name="approve" style="background-color: #2caee2; border: none;">Approve</button>
                </div>
            </div>


        </form>
    </div>

</div>
<!-- Content End -->

</main>


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
        echo "<script>alert('Data Updated Successfully');</script>";
    } else {
        echo "<script>alert('Data Insertion Failed')</script>";
    }
} ?>
