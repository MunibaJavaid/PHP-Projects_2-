<?php include 'header.php'; ?>



<?php include '../includes/connection.php'; ?>



<?php
$hos_Name = $_SESSION['db_Name'];
$querys = "select * from  covid_report inner join vaccination ON covid_report.Vaccine_Id = vaccination.Vacid 
inner join patientdetail on covid_report.Patient_Id = patientdetail.Patid where Hospital_Id = '$hos_Name'";

($res = mysqli_query($con, $querys)) or die('Incorrect Query!!');

// $data = mysqli_fetch_assoc($res);

$rowCount = mysqli_num_rows($res);

// echo "<pre>";
//     print_r($data);
// echo "</pre>";
?>

<main class="page-content">
<div class="title" style="background-color: white; padding: 10px 15px;">
    <h3> Report List <i class="fa-solid fa-file"></i> </h3>
</div> <br>
<div class="card-body">
                  <div class="table-responsive">
                    <table class="table align-middle mb-0">
                      <thead class="table-light">
                        <tr>
                          <th>Patient Name</th>
                          <th>Hospital Name</th>
                          <th>Vaccine Name</th>
                          <th>Status</th>
                          <th>Date</th>
                          <th>Contact</th>
                          <th>CNIC</th>
                          <th>Address</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php while ($data = mysqli_fetch_assoc($res)) {
                          echo '<tr>'; ?>
                          <td><?= @$data['Name'] ?></td>
                          <td> <?= @$data['Hospital_Id'] ?> </td>
                          <td><?= @$data['NameVac'] ?></td>
                          <td><?= @$data['Report_Status'] ?></td>
                          <td><?= @$data['Report_Date'] ?></td>
                          <td><?= @$data['Rep_Contact'] ?></td>
                          <td><?= @$data['Rep_CNIC'] ?></td>
                          <td><?= @$data['Rep_Address'] ?></td>
                          <?php echo '</tr>';
                      } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
</main>
<!-- Content End -->