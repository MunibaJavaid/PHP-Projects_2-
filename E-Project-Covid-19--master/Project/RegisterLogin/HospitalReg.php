<?php include '../includes/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container-fluid full-bg h-100">
        <div class="container h-100">
            <form action="HospitalReg.php" method="post" enctype="multipart/form-data" class="mt-5">


                <div class="row no-margin h-100">
                    <div class="bg-layer d-flex col-md-4">
                        <div class="login-box row">
                            <h3>Hospital Registeration</h3>


                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter Hospital Name" aria-label="Username" aria-describedby="basic-addon1" name="name" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1" name="email" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-location-dot"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1" name="address" required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" name="Pass" required>
                            </div>
                            <!-- <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Repeat Password" aria-label="Username"
                                aria-describedby="basic-addon1" name="repPass" required>
                        </div> -->




                            <button type="submit" class="btn btn-success" name="btn">Click to Login</button>

                            <p class="no-c">Already have Account? <a href="HospLogin.php">Sign In</a></p>

                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>


    <?php if (isset($_POST['btn'])) {
        $Name = $_POST['name'];
        $Email = $_POST['email'];

        $Address = $_POST['address'];

        $Pass = $_POST['Pass'];

        $Password = password_hash($Pass, PASSWORD_BCRYPT);

        $Emailquery = "select * from hospitaldetail where Email = '$Email'";

        $res = mysqli_query($con, $Emailquery);

        if (mysqli_num_rows($res) > 0) {
            echo "<script>alert('Email Already Exist');</script>";
        } else {
            $Insquery = "insert into hospitaldetail (Name,Email,Password,Address) values ('$Name','$Email','$Password','$Address')";
            $rs = mysqli_query($con, $Insquery);

            if ($rs) {
                echo "<script>alert('Data Inserted');</script>";
            } else {
                echo "<script>alert('Data Not Inserted');</script>";
            }
        }
    } ?>
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>

</html>