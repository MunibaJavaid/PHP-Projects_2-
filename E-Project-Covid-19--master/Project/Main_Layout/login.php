<?php include 'connection.php'; ?>

<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> document </title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<div class="container-fluid full-bg h-100">
    <div class="container h-100 mt-5">
        <form action="login.php" method="post" enctype="multipart/form-data" class="mt-5">

            <div class="row no-margin h-100">
                <div class="bg-layer d-flex col-md-4">
                    <div class="login-box row">
                        <h3>User login</h3>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email Address" aria-label="Username"
                                aria-describedby="basic-addon1" name="email" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Password" aria-label="Username"
                                aria-describedby="basic-addon1" name="Pass" required>
                        </div>


                        <p>
                            <label class="container">
                                <input type="checkbox">
                                <span class="checkmark"></span>Remember me
                            </label>
                            forget password ?
                        </p>
                        <button class="btn btn-success" type = submit name = "btn">Click to Login</button>

                        <p class="no-c">Not a member yet? <a href="signup.php">Create your Account</a></p>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>




<?php if (isset($_POST['btn'])) {
    $Email = $_POST['email'];
    $Password = $_POST['Pass'];
    $emailSearch = "select * from user where Email = '$Email'";
    $query = mysqli_query($con, $emailSearch);
    $EmailCount = mysqli_num_rows($query);
    // echo $EmailCount;
    if ($EmailCount) {
        $res = mysqli_fetch_assoc($query);
        $_SESSION['db_Name'] = $res['UserName'];

        echo $_SESSION['db_Name'];

        $_SESSION['db_Role'] = $res['Role'];
        echo $_SESSION['db_Role'];
        $db_Pass = $res['Password'];
        $pass_decode = password_verify($Password, $db_Pass);

        if ($pass_decode) {
            if ($_SESSION['db_Role'] == 'A') {
                echo "<script>window.location.href = '../Main_Dashboard/index.php'</script>";
            } elseif ($_SESSION['db_Role'] == 'H') {
                echo "<script>window.location.href = '../Hospital_Dashboard/HospitalReg.php'</script>";
            } elseif ($_SESSION['db_Role'] == 'P') {
                echo "<script>window.location.href = '../Patient_Dashboard/index.php'</script>";
            } else {
                echo "<script>alert('Login Successful');window.location.href = 'login.php'</script>";
            }
            // header('location:index.php');
        } else {
            echo "<script>alert('Password Incorrect');window.location.href = 'login.php'</script>";
        }
    } else {
        echo "<script>alert('Invalid Email');</script>";
    }
} ?>
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>        
<script src="assets/js/script.js"></script>


</html>