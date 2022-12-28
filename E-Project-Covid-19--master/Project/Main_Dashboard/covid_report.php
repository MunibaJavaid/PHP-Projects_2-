<?php include 'header.php'; ?>
<?php include '../includes/connection.php'; ?>



<?php


$querys = "select * from  covid_report inner join vaccination ON covid_report.Vaccine_Id = vaccination.Vacid ";


$res = mysqli_query($con, $querys) or die ("Incorrect Query!!");

// $data = mysqli_fetch_assoc($res);

$rowCount = mysqli_num_rows($res);

// echo "<pre>";
//     print_r($data);
// echo "</pre>";
?>

<main class="page-content">
    <div class = "title" style="background-color: white; padding: 5px 20px;">
        <h1 style="font-size: 20px; margin: 0;"> View Report List </h1>
    </div>
<div class="card-body" style="background-color: white;">
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
                      <?php while($data = mysqli_fetch_assoc($res)){ echo '<tr>';?>
                          <td><?= @$data['Patient_Id'] ?></td>
                          <td> <?= @$data['Hospital_Id'] ?> </td>
                          <td><?= @$data['NameVac'] ?></td>
                          <td><?= @$data['Report_Status'] ?></td>
                          <td><?= @$data['Report_Date'] ?></td>
                          <td><?= @$data['Rep_Contact'] ?></td>
                          <td><?= @$data['Rep_CNIC'] ?></td>
                          <td><?= @$data['Rep_Address'] ?></td>
                          <?php echo '</tr>';}?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
</main>
<!-- Content End -->