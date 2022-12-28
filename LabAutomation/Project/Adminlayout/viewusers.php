<?php include 'header.php'; ?>
<?php include '../confiq/connection.php'; ?>


<?php
    $query = "select * from user";
    $res = mysqli_query($con,$query)or die("Incorrect Query!!");
    $i=0;
    $rows = mysqli_num_rows($res); 

?>

<main class="dash-content">
                <div class="container-fluid">
                    <h1 class="dash-title">Tables</h1>
                    <!-- <div class="row">
                        <div class="col-lg-6">
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
                        </div>
                        <div class="col-lg-6">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-table"></i>
                                    </div>
                                    <div class="spur-card-title">Table with hover</div>
                                </div>
                                <div class="card-body ">
                                    <table class="table table-hover table-in-card">
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
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-lg-12   ">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-table"></i>
                                    </div>
                                    <div class="spur-card-title">All Users</div>
                                </div>
                                <div class="card-body ">
                                <?php if($rows>0){
                                ?>
                                    <table class="table table-striped table-in-card">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        while($data = mysqli_fetch_assoc($res)){ 
                                          
                                            $i++;
                                            echo '<tr>';
                                        ?>
                                           
                                                <th scope="row"><?= @$i?></th>
                                                <td><?= @$data['Name'] ?></td>
                                                <td><?= @$data['Email'] ?></td>
                                                <td><?= @$data['Tester_Role'] ?></td>
                                                <td><a href="viewusers.php?Delid=<?=@$data['userId']?>"><button type="button" class="btn btn-outline-primary mb-1">Delete</button></a></td>
                                           
                                            <?php echo '</tr>';}?>
                                           
                                        </tbody>
                                    </table>
                                    <?php 
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-table"></i>
                                    </div>
                                    <div class="spur-card-title">Dark table</div>
                                </div>
                                <div class="card-body card-body-with-dark-table">
                                    <table class="table table-dark table-in-card">
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
                    </div>
                </div>
            </main>
    <?php
        error_reporting(0);
$DelID = $_GET['Delid'];

$quer = "delete from user where userId  = $DelID";

$res = mysqli_query($con, $quer);

if ($res) {
    echo "<script>alert('Data Deleted!!');window.location.href = 'viewusers.php';</script>";

} 
mysqli_close($con);
 ?>

<?php include 'footer.php'; ?>