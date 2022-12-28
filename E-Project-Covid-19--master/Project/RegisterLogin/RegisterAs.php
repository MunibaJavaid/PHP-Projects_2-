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
            <form action="RegisterAs.php" method="post" enctype="multipart/form-data" class="mt-5">


                <div class="row no-margin h-100">
                    <div class="bg-layer d-flex col-md-4">
                        <div class="login-box row">
                            <h3> Registeration</h3>


                        

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-list"></i></span>
                                </div>
                                <select class="form-control" id="" name="register_as" aria-describedby="basic-addon1">
                                    <option value="">--Register as a--</option>
                                    <option value="P">Patient</option>
                                    <option value="H">Hospital</option>

                                </select>
                            </div>

                


                            <button type="submit" class="btn btn-success" name="btn">Register As</button>

                            

                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>


    <?php if (isset($_POST['btn'])) {
        $register_as = $_POST['register_as'];

        if ($register_as == 'P') {
            echo "<script>window.location.href = 'PatientReg.php'</script>";
        } elseif ($register_as == 'H') {
            echo "<script>window.location.href = 'HospitalReg.php'</script>";
        }
    } ?>
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>

</html>