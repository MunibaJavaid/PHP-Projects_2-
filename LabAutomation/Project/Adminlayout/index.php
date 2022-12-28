<?php include 'header.php'; ?>
<?php include '../confiq/connection.php'; ?>
<?php
$query = "select * from manufactureproducts where Status  = 'Manufactured'";
$res  = mysqli_query($con, $query);
$rows = mysqli_num_rows($res);

$query2 = "select * from companytesting";
$res2  = mysqli_query($con, $query2);
$rows2 = mysqli_num_rows($res2);


$query3 = "select * from labtesting";
$res3  = mysqli_query($con, $query3);
$rows3 = mysqli_num_rows($res3);



    $query4 = "select * from manufactureproducts where Status  = 'Pending'";
    $res4 = mysqli_query($con,$query4)or die("Incorrect Query!!");

    $rows4 = mysqli_num_rows($res4); 


?>
       <main class="dash-content">
              <main class="dash-content">
                <div class="container-fluid">
                    <div class="row dash-row">
                        <div class="col-xl-4">
                            <div class="stats stats-dark">
                                <h3 class="stats-title"> Manufactured Products</h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-cart-plus"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"><?=@$rows?></div>
                                        <div class="stats-change">
                                        <a href="viewproduct.php"><button type="button" class="btn btn-light mb-1">View All</button></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats stats-dark ">
                                <h3 class="stats-title"> Remarks By Company </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-edit"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"><?=@$rows2?></div>
                                        <div class="stats-change">
                                        <a href="companyremark.php"><button type="button" class="btn btn-light mb-1">View All</button></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats stats-dark">
                                <h3 class="stats-title"> Remarks By Laboratory </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                    <i class="fas fa-edit"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"><?=@$rows3?></div>
                                        <div class="stats-change">
                                        <a href="companyremark.php"><button type="button" class="btn btn-light mb-1">View All</button></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                    <div class="col-lg-12">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                    <div class="spur-card-title">Pending Products</div>
                                </div>
                                <div class="card-body ">
                                <?php if($rows>0){
                                ?>
                                    <table class="table table-striped table-in-card">
                                        <thead>
                                            <tr>
                                            <th scope="col">Id</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        while($data = mysqli_fetch_assoc($res4)){ echo '<tr>';
                                        ?>
                                            <tr>
                                                <th scope="row"><?= @$data['ProdId'] ?></th>
                                                <td><img src= "<?=@$data['Image']?>"  alt="databaseImg" style = "width:60px; border-radius:100%;"></td>
                                                <td><?= @$data['Prodname'] ?></td>
                                                <td><?= @$data['Price'] ?></td>
                                                <td><?= @$data['description'] ?></td>
                                                <td><?= @$data['Status'] ?></td>
                                                <td><a href="productedit.php?id=<?=@$data['ProdId']?>"><button type="button" class="btn btn-outline-primary mb-1 mx-2">Edit </button></a> 
                                            </tr>
                                            <?php echo '</tr>';}?>
                                            
                                        </tbody>
                                    </table>
                                    <?php 
                                }
                                ?>
                                </div>
                            </div>
                        </div>

                </div>
            </main>
        </main>
        
<?php include 'footer.php'; ?>
