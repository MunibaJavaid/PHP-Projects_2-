<?php include 'header.php'; ?>

<main class="page-content">

<div class="title" style="background-color: white; padding: 10px 15px;">
    <h3> Add Vaccine <i class="fa-solid fa-syringe"></i> </h3>
</div>

    <div class="container"> <br>
        <form action="Vac_Crud.php" method="post" enctype="multipart/form-data" name="formid">
            <div class="container">
                <!-- code here -->
                <div class="card" style="width: 100% !important;">
                    <div class="card-image">
                        <h2 class="card-heading">
                            Covid Vaccines
                            <small>Add a Vaccine</small>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                        <form class="card-form">
                            <div class="input">
                                <input type="text" class="input-field" id="name" placeholder="" name="name" required>
                                <label class="input-label">Vaccine Name:</label>
                            </div>
                            <div class="input">
                                <input type="text" class="input-field" id="name" placeholder="Enter Hospital Name" name="cName" value="<?= $_SESSION[
                                    'db_Name'
                                ] ?>" required>
                                <label class="input-label">Hospital Name:</label>
                            </div>
                            <div class="input">
                                <!-- <input type="password" class="input-field" name="address" required/> -->
                                <select class="input-field" id="cat" name="vacStatus" required>
                                    <option value=""></option>
                                    <option value="Available">Available</option>
                                    <option value="Unavailable">Unavailable</option>
                                </select>
                                <label class="input-label">Status:</label>
                            </div>
                            <div class="input">
                                <input type="text" class="input-field" name="price" required />
                                <label class="input-label">Vaccine Price:</label>
                            </div>
                            <div class="input">
                                <input type="text" class="input-field" name="Proddesc" required />
                                <label class="input-label">Vaccine Description:</label>
                            </div>
                            <div class="action">
                                <button type="submit" class="action-button" name="ins">CREATE</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="d-flex flex-column align-items-center text-center  user-profile-image">

                            <input class="form-control hidden" type="file" id="Pro_Image" name="uploaded" style="visibility: hidden;" />

                            <img class="mt-5" style="width:250px;" src="assets/images/No_Image_Available.jpg" id="UserImage">
                            <div class="upload-photo text-center ">
                                <br />
                                <button type="button" class="btn btn-success" style="background-color: #2caee2; border: none;" onclick="document.getElementById('Pro_Image').click(); return false;">
                                    <i class="fas fa-download"></i> Upload Image
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-info">
                    <p>By signing up you are agreeing to our <a href="#">Terms and Conditions</a></p>
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