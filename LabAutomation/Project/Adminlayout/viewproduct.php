<?php include 'header.php'; ?>
<?php include '../confiq/connection.php'; ?>


<?php
    $query = "select * from manufactureproducts";
    $res = mysqli_query($con,$query)or die("Incorrect Query!!");

    $rows = mysqli_num_rows($res); 

?>
<main class="dash-content">
                <div class="container-fluid">
                    <h1 class="dash-title">Tables</h1>
                    <div class="row">
                        <!-- <div class="col-lg-6">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-table"></i>
                                    </div>
                                    <div class="spur-card-title">Default table</div>
                                </div>
                                <div class="card-body ">
                                    <table class="table table-in-card">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-lg-12">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-table"></i>
                                    </div>
                                    <div class="spur-card-title">Products</div>
                                </div>
                                <div class="card-body ">

                                <?php if($rows>0){
                                ?>
                                    <table class="table table-hover table-in-card">
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
                                        while($data = mysqli_fetch_assoc($res)){ echo '<tr>';
                                        ?>
                                            <tr>
                                                <th scope="row"><?= @$data['ProdId'] ?></th>
                                                <td><?= @$data['Prodname'] ?></td>
                                                <td><?= @$data['Price'] ?></td>
                                                <td><?= @$data['description'] ?></td>
                                                <td><img src= "<?=@$data['Image']?>"  alt="databaseImg" style = "width:60px; border-radius:100%;"></td>
                                                <td><?= @$data['Status'] ?></td>
                                                <td><a href="productedit.php?id=<?=@$data['ProdId']?>"><button type="button" class="btn btn-outline-primary mb-1 mx-2">Edit </button></a> 
                                                <a href="viewproduct.php?Delid=<?=@$data['ProdId']?>"><button type="button" class="btn btn-outline-dark mb-1">Delete</button></a></td>
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
                </div>
            </main>
<?php
            error_reporting(0);
$DelID = $_GET['Delid'];

$quer = "delete from manufactureproducts where ProdId  = $DelID";

$res = mysqli_query($con, $quer);

if ($res) {
    echo "<script>alert('Data Deleted!!');window.location.href = 'viewproduct.php';</script>";

} 
mysqli_close($con);
 ?>

<?php include 'footer.php'; ?>