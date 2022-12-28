<?php include 'header.php'; ?>
<?php include '../confiq/connection.php'; ?>

<?php
$ID = $_GET['id'];
$query = "select * from manufactureproducts where ProdId  = $ID";
$GetData = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($GetData);

?>
       <main class="dash-content">
            <div class="container"> <br>
                <h3 class = "text-center">Add Users</h3> <br>
                <form action="crud.php" method="post" enctype="multipart/form-data">

                    <div class="row">

                    <input type="hidden" name="prodId" value=<?= @$res['ProdId'] ?>>

                        <div class="col-sm-12 col-lg-6" >
                            <div class="form-group wrap-input1">
                                <label for="name">Product Name:</label>
                                <input type="text" class="form-control input1" id="name" placeholder="Enter Name"
                                    name="name" value=<?= @$res['Prodname'] ?>>
                            </div>
                            <div class="form-group wrap-input1">
                                <label for="price">Price</label>
                                <input type="number" class="form-control input1" id="name" placeholder="Enter Price"
                                    name="price" value=<?= @$res['Price'] ?>>
                            </div>

                            <div class="form-group wrap-input1">
                                <label for="description">Description</label>
                                <textarea rows = "4" cols = "40" class="form-control input1" id="name"  placeholder="Enter Description" name = "description" >
                                <?= @$res['description'] ?>
                                </textarea>
                            </div>
                            

                            <div class="form-group">
                                <label for="status">Select Status:</label>
                                <select class="form-control" id="city" name = "status">
                                    <option value="">--Select--</option>
                                    <option value = "Pending" <?php
                                    if($res['Status'] == 'Pending')
                                    {echo "selected";}?>
                                    >Pending</option>
                                    <option value = "Manufactured" 
                                    <?php
                                    if($res['Status'] == 'Manufactured')
                                    {echo "selected";}?>
                                    >Manufactured</option>

                                </select>
                            </div>

                          
                            <button type="submit" class="btn btn-dark" name="prdupd">Add Product</button>

                        </div>

                        <div class="col-sm-12 col-lg-4 ">
                            <div class="d-flex flex-column align-items-center text-center  user-profile-image">

                                <input class="form-control hidden" type="file" id="Pro_Image" name="uploaded"
                                    style="visibility: hidden;" />

                                <img class="mt-5" style="width:250px;" src="<?=@$res['Image'] ?>" id="UserImage">
                                <div class="upload-photo text-center ">
                                    <br />
                                    <button type="button" class="btn btn-dark"
                                        onclick="document.getElementById('Pro_Image').click(); return false;">
                                        <i class="fas fa-download"></i> Upload Image
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>


                </form>
            </div>
        </main>


        <script>
$(document).ready(function() {


    //$("#upload-photos").click(function () {
    //    $("#BrowseImage").trigger('click')
    //})

    $("#UserImage").click(function() {
        $("#Pro_Image").trigger('click')
    })


    $("#Pro_Image").change(function() {
        if (this.files && this.files[0]) {
            var fileReader = new FileReader();
            fileReader.readAsDataURL(this.files[0]);
            fileReader.onload = function(x) {

                $("#UserImage").attr('src', x.target.result);
            }
        }
    })
})
</script>

<?php include 'footer.php'; ?>

    