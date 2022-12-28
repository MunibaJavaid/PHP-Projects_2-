<?php include 'header.php'; ?>
<?php include '../includes/authorized.php'; ?>
<?php include '../includes/connection.php'; ?>
      
<?php
    $querys = "select * from  hospitaldetail ";
    ($res = mysqli_query($con, $querys)) or die('Incorrect Query!!'); // $data = mysqli_fetch_assoc($res);
    $rowCount = mysqli_num_rows($res);
?>   
      
      <!--start content-->
       <main class="page-content">
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
                          <td><?= $data['Name']?></td>
                          <td><?= $data['Email']?></td>
                          <td><?= $data['Address']?></td>
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
    </main>