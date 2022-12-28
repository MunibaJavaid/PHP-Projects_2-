<?php include 'header.php';?>
<?php include '../confiq/connection.php';?>




<?php
$uid = $_SESSION['uid'] ;
$query = "select * from user where userId  = $uid";
$GetData = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($GetData);


$query3 = "select * from companytesting";
$res3  = mysqli_query($con, $query3);
$rows3 = mysqli_num_rows($res3);


?>



<div class="main-panel">
        <div class="content-wrapper">
        <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4>Profile</h4>
                    
                    <div class="template-demo">
                      
                      <h4>Name: <small class="text-muted"> <?=@$res['Name']?>  </small> </h4>
                      <h4>Email: <small class="text-muted"> <?=@$res['Email']?> </small> </h4>
                      <h4>Role: <small class="text-muted"> Company Testing </small> </h4>
                      <h4>Total Remarks: <small class="text-muted"> <?=@$rows3?></small> </h4>

                
                    </div>
                  </div>
                </div>
              </div>
        </div>
</div>
</div>


<?php include 'footer.php';?>

      