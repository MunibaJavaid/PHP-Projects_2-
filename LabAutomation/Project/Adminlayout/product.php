<?php include 'header.php'; ?>
<?php include '../confiq/connection.php'; ?>

       <main class="dash-content">
            <div class="container"> <br>
                <h3 class = "text-center">Add Products</h3> <br>
                <form action="crud.php" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-sm-12 col-lg-6" >
                            <div class="form-group wrap-input1">
                                <label for="name">Product Name:</label>
                                <input type="text" class="form-control input1" id="name" placeholder="Enter Name"
                                    name="name">
                            </div>
                            <div class="form-group wrap-input1">
                                <label for="price">Price</label>
                                <input type="number" class="form-control input1" id="name" placeholder="Enter Price"
                                    name="price">
                            </div>

                            <div class="form-group wrap-input1">
                                <label for="description">Description</label>
                                <textarea rows = "4" cols = "40" class="form-control input1" id="name"  placeholder="Enter Description" name = "description"></textarea>
                            </div>
                            

                            <div class="form-group">
                                <label for="category">Select Category:</label>
                                <select class="form-control" id="city" name = "category">
                                    <option value="">--Select--</option>
                                    <option value = "Wires">Wire And Cable</option>
                                    <option value = "Explosion Proof">Explosion Proof</option>
                                    <option value = "Circuit Breakers">Circuit Breakers</option>
                                    <option value = "Lugs">Lugs</option>
                                    <option value = "Connector">Connector</option>
                                     

                                </select>
                            </div>


                            <div class="form-group">
                                <label for="status">Select Status:</label>
                                <select class="form-control" id="city" name = "status">
                                    <option value="">--Select--</option>
                                    <option value = "Pending">Pending</option>
                                    <option value = "Manufactured">Manufactured</option>

                                </select>
                            </div>

                          
                            <button type="submit" class="btn btn-dark" name="prdins">Add Product</button>

                        </div>

                        <div class="col-sm-12 col-lg-4 ">
                            <div class="d-flex flex-column align-items-center text-center  user-profile-image">

                                <input class="form-control hidden" type="file" id="Pro_Image" name="uploaded"
                                    style="visibility: hidden;" />

                                <img class="mt-5" style="width:250px;" src="assets/images/noImg.jpg" id="UserImage">
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
