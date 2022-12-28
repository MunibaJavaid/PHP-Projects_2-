<?php include 'header.php'; ?>
<?php include '../confiq/connection.php'; ?>


<?php
    $query = "select p.Prodname, p.category, p.description, l.Remarks, l.Result from manufactureproducts p
    inner join labtesting l on p.ProdId = l.ProductId";
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
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Category</th>                          
                                            <th scope="col">Description</th>
                                            <th scope="col">Remarks</th>
                                            <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        while($data = mysqli_fetch_assoc($res)){ echo '<tr>';
                                        ?>
                                            <tr>
                                                <td><?= @$data['Prodname'] ?></td>
                                                <td><?= @$data['category'] ?></td>
                                                <td><?= @$data['description'] ?></td>
                                                <td><?= @$data['Remarks'] ?></td>

                                                <td>
                                                    <?php
                                                    if(@$data['Result'] == 'Approved')
                                                    {
                                                    echo '<label class="badge badge-primary">Accepted</label>';
                                                }
                                                else{
                                                    echo '<label class="badge badge-dark">Rejected</label>';
                                                }
                                                    ?>
                                                </td>

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


<?php include 'footer.php'; ?>