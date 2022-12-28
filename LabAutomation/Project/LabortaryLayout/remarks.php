<?php include 'header.php';?>
<?php include '../confiq/connection.php';?>


<?php
$pid = $_GET['id'];
$uid = $_SESSION['uid'] ;
$query = "select * from manufactureproducts where ProdId  = $pid";
$GetData = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($GetData);

?>


<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Give Remarks </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><?= @$res['Prodname'] ?> </h4>
                    <form action="crud.php" method="post" class="forms-sample">
                    <input type="hidden" name="prodId" value=<?= @$res['ProdId'] ?>>
                      
                     
                    <div class="form-group">
                        <label for="remarks">Remarks</label>
                        <input type="text" name="remarks" class="form-control" placeholder="Remarks">
                      </div>

                      <div class="form-group">
                      <label for="exampleFormControlSelect3">Select Result</label>
                      <select class="form-control form-control-sm" name="result" id="exampleFormControlSelect3">
                        <option value = "Approved">Approve</option>
                        <option value = "Reject">Reject</option>
                     
                      </select>
                    </div>
                      
                      
                     
                      <button type="submit" name="remark" class="btn btn-gradient-primary me-2">Submit</button>
                  
                    </form>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          
        </div>

