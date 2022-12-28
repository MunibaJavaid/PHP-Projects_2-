<?php include 'header.php'; ?>
<?php include '../confiq/connection.php'; ?>

       <main class="dash-content">
            <div class="container"> <br>
                <h3 class = "text-center">Add Users</h3> <br>
                <form action="addTesterUser.php" method="post" enctype="multipart/form-data">

                    <div class="row">

                        <div class="col-sm-12 col-lg-6" >

                            <div class="form-group wrap-input1">
                                <label for="name">Full Name:</label>
                                <input type="text" class="form-control input1" id="name" placeholder="Enter Your Full Name"
                                    name="name">
                            </div>
                            <div class="form-group wrap-input1">
                                <label for="name">Email:</label>
                                <input type="text" class="form-control input1" id="name" placeholder="Enter Your Email"
                                    name="email">
                            </div>

                            <div class="form-group">
                                <label for="city">Select Testing:</label>
                                <select class="form-control" id="city" name = "Testing">
                                    <option value="">--Select--</option>
                                    <option value = "CPLR">Company Testing</option>
                                    <option value = "SLR">Laboratory Testing</option>

                                </select>
                            </div>

                            <div class="form-group wrap-input1">
                                <label for="name">Password:</label>
                                <input type="password" class="form-control input1" id="name"
                                    placeholder="Enter Your Password" name="Pass">
                            </div>
                            <button type="submit" class="btn btn-dark" name="ins">Add User</button>

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

        <!-- Data Insert Code -->
<?php if (isset($_POST['ins'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $TesterRole = $_POST['Testing'];
    $Pass = $_POST['Pass'];
    $Password = password_hash($Pass, PASSWORD_BCRYPT);
    $FileProp = $_FILES['uploaded'];
    $FileName = $_FILES['uploaded']['name'];
    $FileType = $_FILES['uploaded']['type'];
    $FileTempLoc = $_FILES['uploaded']['tmp_name'];
    $FileSize = $_FILES['uploaded']['size'];
    $folder = '../SaveImages/images/';
    $Emailquery = "select * from user where Email = '$Email'";
    $res = mysqli_query($con, $Emailquery);
    if (mysqli_num_rows($res) > 0) {
        echo "<script>alert('Email Already Exist');</script>";
    } else {
        if (
            strtolower($FileType) == 'image/jpeg' ||
            strtolower($FileType) == 'image/jpg' ||
            strtolower($FileType) == 'image/png'
        ) {
            if ($FileSize <= 1000000) {
               
                $folder = $folder . $FileName;
                $query = "insert into user(Name,Email,Password,Image,Tester_Role) values ('$Name','$Email','$Password','$folder','$TesterRole')";
                // echo $query;
                $res = mysqli_query($con, $query);
                
                // echo $res;
                if ($res) {
                    echo "<script>alert('Data Inserted Successfully');window.location.href = 'addTesterUser.php';</script>";
                    move_uploaded_file($FileTempLoc, $folder);
                } else {
                    echo "<script>alert('Data Insertion Failed')</script>";
                }
            } else {
                echo "<script>alert('Image should be less than 1MB !! ');window.location.href = 'addTesterUser.php';</script>";
            }
        } else {
            echo "<script>alert('Image Formate not supported!! ');window.location.href = 'AddTesterUser.php';</script>";
        }
    }
} ?>


<?php include 'footer.php'; ?>
