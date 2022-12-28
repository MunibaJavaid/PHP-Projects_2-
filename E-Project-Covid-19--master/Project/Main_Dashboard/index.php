<?php include 'header.php'; ?>
<?php include '../includes/authorized.php'; ?>
<?php include '../includes/connection.php'; ?>


<?php
$querys = "select * from  hospitaldetail ";
($res = mysqli_query($con, $querys)) or die('Incorrect Query!!'); // $data = mysqli_fetch_assoc($res);
$rowCount = mysqli_num_rows($res);
?>


< <!--start content-->
  <main class="page-content">
  <div class="wrapper">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
      <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <?php
              $query1 = "select * from  vaccination";




              $res1 = mysqli_query($con, $query1) or die("Incorrect Query!!");


              // $data = mysqli_fetch_assoc($res);

              $rowCount1 = mysqli_num_rows($res1);


              ?>
              <div>
                <p class="mb-0 text-secondary">Total Vaccines</p>
                <h4 class="my-1"><?= @$rowCount1 ?></h4>
                <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> 5% from last week</p>
              </div>
              <div class="widget-icon-large bg-gradient-purple text-white ms-auto"><i class="bi bi-basket2-fill"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <?php
            $query2 = "select * from  hospitaldetail ";
            $res2 = mysqli_query($con, $query2) or die("Incorrect Query!!");
            $rowCount2 = mysqli_num_rows($res2);
            ?>
            <div class="d-flex align-items-center">
              <div>
                <p class="mb-0 text-secondary">Total Hospitals</p>
                <h4 class="my-1">
                  <?= @$rowCount2 ?>
                </h4>
                <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> 4.6 from last week</p>
              </div>
              <div class="widget-icon-large bg-gradient-success text-white ms-auto"><i class="bi bi-currency-exchange"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <?php
            $query3 = "select * from  patientdetail ";
            $res3 = mysqli_query($con, $query3) or die("Incorrect Query!!");
            $rowCount3 = mysqli_num_rows($res3);

            ?>
            <div class="d-flex align-items-center">
              <div>
                <p class="mb-0 text-secondary">Total Patients</p>
                <h4 class="my-1"> <?= @$rowCount3 ?></h4>
                <p class="mb-0 font-13 text-danger"><i class="bi bi-caret-down-fill"></i> 2.7 from last week</p>
              </div>
              <div class="widget-icon-large bg-gradient-danger text-white ms-auto"><i class="bi bi-people-fill"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <?php
            $query4 = "select * from  appointment";
            $res4 = mysqli_query($con, $query4) or die("Incorrect Query!!");
            $rowCount4 = mysqli_num_rows($res4);

            ?>
            <div class="d-flex align-items-center">
              <div>
                <p class="mb-0 text-secondary">Total Appointment</p>
                <h4 class="my-1"><?= @$rowCount4 ?></h4>
                <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> 12.2% from last week</p>
              </div>
              <div class="widget-icon-large bg-gradient-info text-white ms-auto"><i class="bi bi-bar-chart-line-fill"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end row-->

    <div class="card radius-10">
      <div class="card-header bg-transparent">
        <div class="row g-3 align-items-center">
          <div class="col">
            <h5 class="mb-0">Hospital List</h5>
          </div>
          <div class="col">
            <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
              <div class="dropdown">
                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:;">Action</a>
                  </li>
                  <li><a class="dropdown-item" href="javascript:;">Another action</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead class="table-light">
              <tr>
                <th>Hospital Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($data = mysqli_fetch_assoc($res)) {
                echo '<tr>'; ?>
                <td><?= $data['Name'] ?></td>
                <td><?= $data['Email'] ?></td>
                <td><?= $data['Address'] ?></td>
                <td>
                  <div class="d-flex align-items-center gap-3 fs-6">
                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                  </div>
                </td>
              <?php echo '</tr>';
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- PATIENT_LIST -->
    <?php
    $querys = "select * from  patientdetail ";
    ($res = mysqli_query($con, $querys)) or die('Incorrect Query!!'); // $data = mysqli_fetch_assoc($res);
    $rowCount = mysqli_num_rows($res);
    ?>


    <div class="card radius-10">
      <div class="card-header bg-transparent">
        <div class="row g-3 align-items-center">
          <div class="col">
            <h5 class="mb-0">Patient List</h5>
          </div>
          <div class="col">
            <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
              <div class="dropdown">
                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:;">Action</a>
                  </li>
                  <li><a class="dropdown-item" href="javascript:;">Another action</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead class="table-light">
              <tr>
                <th>Hospital Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($data = mysqli_fetch_assoc($res)) {
                echo '<tr>'; ?>
                <td><?= $data['Name'] ?></td>
                <td><?= $data['Email'] ?></td>
                <td><?= $data['Address'] ?></td>
                <td>
                  <div class="d-flex align-items-center gap-3 fs-6">
                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                  </div>
                </td>
              <?php echo '</tr>';
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


    <!-- VACCINE_LIST -->

    <?php

    $querys = "select * from  vaccination";


    $res = mysqli_query($con, $querys) or die("Incorrect Query!!");

    // $data = mysqli_fetch_assoc($res);

    $rowCount = mysqli_num_rows($res);



    // echo "<pre>";
    //     print_r($data);
    // echo "</pre>";
    ?>

    <div class="title" style="background-color: white; padding: 5px 20px;">
      <h1 style="font-size: 20px; margin: 0;"> View Vaccine List </h1>
    </div>
    <div class="card-body" style="background-color: white;">

      <?php
      if ($rowCount > 0) {
      ?>
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead class="table-light">
              <tr>
                <th>Hospital Name</th>
                <th>Vaccine Name</th>
                <th>Status</th>
                <th>Price</th>
                <th>Date</th>
                <th>Description</th>
                <th>Actions</th>

              </tr>
            </thead>
            <tbody>

              <?php while ($data = mysqli_fetch_assoc($res)) {
                echo '<tr>'; ?>
                <td><?= @$data['Hospital_Name'] ?></td>
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="product-box border">
                      <img src="<?= @$data['Vac_Img'] ?>" alt="databaseImg" style="width:60px;">
                    </div>
                    <div class="product-info">
                      <h6 class="product-name mb-1"><?= @$data['NameVac'] ?></h6>
                    </div>
                  </div>
                </td>
                <td><?= @$data['Status'] ?></td>
                <td><?= @$data['Price'] ?></td>
                <td><?= @$data['Date'] ?></td>
                <td><?= @$data['Description'] ?></td>
                <td>
                  <div class="d-flex align-items-center gap-3 fs-6">
                    <a href="Product_View.php?Delid=<?= @$data['Vacid'] ?>" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
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
      } else {
        echo "<h5 class='text-danger'>No Record found</h5>";
      }



      error_reporting(0);
      $DelID = $_GET['Delid'];

      $quer = "delete from vaccination where Vacid  = $DelID";

      $res = mysqli_query($con, $quer);

      if ($res) {
        echo "<script>alert('Data Deleted!!');window.location.href = 'Product_View.php';</script>";
      }
      mysqli_close($con);
  ?>

    </div>
  </main>
  <!--end page main-->