<?php include 'header.php';?>
<?php include '../confiq/connection.php';?>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            
            
<?php
    $query = "select * from manufactureproducts";
    $res = mysqli_query($con,$query)or die("Incorrect Query!!");

    $rows = mysqli_num_rows($res); 

?>
							


            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Recent Tickets</h4>

                    <?php if($rows>0)
                    {?>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Name </th>
                            <th> Price </th>
                            <th> Description </th>
                            <th> Category </th>
                            <th> Image </th>
                            <th> Status </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($data = mysqli_fetch_assoc($res)){ echo '<tr>';
                        ?>
                          <tr>
                            
                            <td> <?= @$data['Prodname'] ?> </td>          
                            <td> <?= @$data['Price'] ?> </td>
                            <td> <?= @$data['description'] ?> </td>
                            <td> <?= @$data['category'] ?> </td>
                            <td>
                              <img src="<?=@$data['Image']?>" class="me-2" alt="image">
                            </td>
                            <td>
                            <a href="remarks.php?id=<?=@$data['ProdId']?>"><button type="button" class="btn btn-dark btn-fw">Give Remarks</button></a>
                            </td>
                          </tr>
                          <?php echo '</tr>';}?>
                          <!-- <tr>
                            <td>
                              <img src="assets/images/faces/face2.jpg" class="me-2" alt="image"> Stella Johnson
                            </td>
                            <td> High loading time </td>
                            
                            <td> Dec 12, 2017 </td>
                            <td> WD-12346 </td>
                            <td>
                              <label class="badge badge-gradient-warning">PROGRESS</label>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="assets/images/faces/face3.jpg" class="me-2" alt="image"> Marina Michel
                            </td>
                            <td> Website down for one week </td>
                            
                            <td> Dec 16, 2017 </td>
                            <td> WD-12347 </td>
                            <td>
                              <label class="badge badge-gradient-info">ON HOLD</label>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="assets/images/faces/face4.jpg" class="me-2" alt="image"> John Doe
                            </td>
                            <td> Loosing control on server </td>
                           
                            <td> Dec 3, 2017 </td>
                            <td> WD-12348 </td>
                            <td>
                              <label class="badge badge-gradient-danger">REJECTED</label>
                            </td>
                          </tr> -->
                        </tbody>
                      </table>
                      <?php 
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->

        

      <?php include 'footer.php';?>

      