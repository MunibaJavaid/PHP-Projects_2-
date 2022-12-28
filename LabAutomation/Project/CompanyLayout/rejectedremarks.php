<?php include 'header.php';?>
<?php include '../confiq/connection.php';?>


<?php
     $query = "select p.Prodname, p.category, p.description, l.Remarks, l.Result from manufactureproducts p
     inner join companytesting l on p.ProdId = l.prodId where l.Result = 'Reject'";
    $res = mysqli_query($con,$query)or die("Incorrect Query!!");
    $rows = mysqli_num_rows($res); 

?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Product Remarks </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Rejected Products</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <!-- <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic Table</h4>
                    <p class="card-description"> Add class <code>.table</code>
                    </p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Profile</th>
                          <th>VatNo.</th>
                          <th>Created</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>53275531</td>
                          <td>12 May 2017</td>
                          <td><label class="badge badge-danger">Pending</label></td>
                        </tr>
                        <tr>
                          <td>Messsy</td>
                          <td>53275532</td>
                          <td>15 May 2017</td>
                          <td><label class="badge badge-warning">In progress</label></td>
                        </tr>
                        <tr>
                          <td>John</td>
                          <td>53275533</td>
                          <td>14 May 2017</td>
                          <td><label class="badge badge-info">Fixed</label></td>
                        </tr>
                        <tr>
                          <td>Peter</td>
                          <td>53275534</td>
                          <td>16 May 2017</td>
                          <td><label class="badge badge-success">Completed</label></td>
                        </tr>
                        <tr>
                          <td>Dave</td>
                          <td>53275535</td>
                          <td>20 May 2017</td>
                          <td><label class="badge badge-warning">In progress</label></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div> -->
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                   
                    <?php 
                    if($rows>0) {?>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Category</th>                          
                          <th>Description</th>
                          <th>Remarks</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      while($data = mysqli_fetch_assoc($res)){ 
                    
                      echo '<tr>';
                      ?>
                          <td><?= @$data['Prodname'] ?></td>
                          <td><?= @$data['category'] ?></td>
                          <td><?= @$data['description'] ?></td>
                          <td><?= @$data['Remarks'] ?></td>
                          
                  
                          <td>
                            <?php
                            if(@$data['Result'] == 'Approved')
                            {
                              echo '<label class="badge badge-info">Accepted</label>';
                           }
                           else{
                            echo '<label class="badge badge-danger">Rejected</label>';
                           }
                            ?>
                          </td>

                        <?php echo '</tr>'; }?>
                        
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
          

      <?php include 'footer.php';?>  