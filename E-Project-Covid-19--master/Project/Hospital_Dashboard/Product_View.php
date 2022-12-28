<?php include 'header.php'; ?>



<?php include '../includes/connection.php'; ?>



<?php
$hos_Name = $_SESSION['db_Name'];
$querys = "select * from  vaccination where Hospital_Name = '$hos_Name'";

($res = mysqli_query($con, $querys)) or die('Incorrect Query!!');

// $data = mysqli_fetch_assoc($res);

$rowCount = mysqli_num_rows($res);

// echo "<pre>";
//     print_r($data);
// echo "</pre>";
?>

<main class="page-content">
<div class="title" style="background-color: white; padding: 10px 15px;">
    <h3> Vaccine List <i class="fa-solid fa-syringe"></i> </h3>
</div>
<div class="card-body">
                  <div class="table-responsive">
                    <table class="table align-middle mb-0">
                      <thead class="table-light">
                        <tr>
                          <th>Hospital Name</th>
                          <th>Vaccine Name</th>
                          <th>Vaccine Image</th>
                          <th>Status</th>
                          <th>Price</th>
                          <th>Date</th>
                          <th>Actions</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php while ($data = mysqli_fetch_assoc($res)) {
                          echo '<tr>'; ?>
                          <td><?= @$data['Hospital_Name'] ?></td>
                           <td><?= @$data['NameVac'] ?></td>
                          <td>
                            <div class="d-flex align-items-center gap-3">
                              <div class="product-box border">
                              <img src= "<?= @$data[
                                  'Vac_Img'
                              ] ?>"  alt="databaseImg" style = "width:60px;">
                              </div>
                              <div class="product-info">
                                <h6 class="product-name mb-1"><?= @$data[
                                    'Name'
                                ] ?></h6>
                              </div>
                            </div>
                          </td>
                          <td><?= @$data['Status'] ?></td>
                          <td><?= @$data['Price'] ?></td>
                          <td><?= @$data['Date'] ?></td>
                          <td><?= @$data['Description'] ?></td>
                          <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                              <a href="VacEdit.php?id=<?= @$data[
                                  'Vacid'
                              ] ?>" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                              <a href="Product_View.php?Delid=<?= @$data[
                                  'Vacid'
                              ] ?>" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
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