<?php include 'header.php'; ?>
<?php include '../includes/hospital_authorized.php'; ?>
<?php include '../includes/connection.php'; ?>

<?php
$HosId = $_SESSION['db_Name'];
$querys = "select * from  appointment inner join hospitaldetail ON appointment.Hosid = hospitaldetail.Hosid inner join 
vaccination ON appointment.Vacid = vaccination.Vacid where Name = '$HosId'";

($res = mysqli_query($con, $querys)) or die('Incorrect Query!!'); // $data = mysqli_fetch_assoc($res);
$rowCount = mysqli_num_rows($res);

// echo "<pre>";
//     print_r($data);
// echo "</pre>";
?>

<main class="page-content">
<div class="title" style="background-color: white; padding: 10px 15px;">
    <h3> Appointment List <i class="fa-solid fa-calendar-days"></i> </h3>
</div> <br>
<div class="card-body">
                  <div class="table-responsive">
                    <table class="table align-middle mb-0">
                      <thead class="table-light">
                        <tr>
                          <th>Hospital Name</th>
                          <th>Patient Name</th>
                          <th>Date</th>
                          <th>Fee</th>
                          <th>Vaccine Name</th>
                          <th>Cnic</th>
                          <th>Contact</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php while ($data = mysqli_fetch_assoc($res)) {
                          echo '<tr>'; ?>
                          <td><?= @$data['Name'] ?></td>
                        
                          <td><?= @$data['Patid'] ?></td>
                
                          <td><?= @$data['Datee'] ?></td>
                          <td><?= @$data['Fee'] ?></td>
                          <td><?= @$data['NameVac'] ?></td>
                          <td><?= @$data['cnic'] ?></td>
                          <td><?= @$data['contact'] ?></td>
                          <td><?= @$data['StatusVac'] ?></td>
                          <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                              <a href="approve.php?id=<?= @$data[
                                  'AppId'
                              ] ?>" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="fa-solid fa-check"></i></a>
                              <a href="Product_View.php?Delid=<?= @$data[
                                  'Vacid'
                              ] ?>" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="fa-solid fa-xmark"></i></a>
                            </div>
                          </td>
                          <?php echo '</tr>';
                      } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
<?php
if ($rowCount > 0) { ?>

 <?php } else {echo "<h5 class='text-danger'>No Record found</h5>";}
error_reporting(0);
$DelID = $_GET['Delid'];
$quer = "delete from vaccination where Vacid  = $DelID";
$res = mysqli_query($con, $quer);
if ($res) {
    echo "<script>alert('Data Deleted!!');window.location.href = 'Product_View.php';</script>";
}
mysqli_close($con);
?>
</main>
<!-- Content End -->