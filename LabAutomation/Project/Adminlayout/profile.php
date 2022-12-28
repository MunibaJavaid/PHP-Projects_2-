<?php include 'header.php'; ?>
<?php include '../confiq/connection.php'; ?>

<?php

$uid = $_SESSION['uid'] ;
$query = "select * from user where userId  = $uid";
$GetData = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($GetData);


$query2 = "select * from manufactureproducts";
$res2  = mysqli_query($con, $query2);
$rows2 = mysqli_num_rows($res2);
?>


<main class="dash-content">
    <div class="container-fluid">
    <div class="card spur-card">
                                <div class="card-header">
                                  
                                    <div class="spur-card-title"> Profile </div>
                                </div>
                                
                                <div class="card-body">
                                    <blockquote class="blockquote">
                                        <h4 class="mb-2"><strong>Name: </strong><?= @$res['Name']?> </h4>   
                                        <h4 class="mb-2"><strong>Email: </strong> <?= @$res['Email']?> </h4>   
                                        <h4 class="mb-2"><strong>Role: </strong> Admin</h4>  
                                        <h4 class="mb-2"><strong>Total Products: </strong> <?= @$rows2?> </h4>   
                                       
                                    </blockquote>
                                </div>
                            </div>
    </div>
</main>
<?php include 'footer.php'; ?>