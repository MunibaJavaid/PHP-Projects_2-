<?php
session_start();
include '../confiq/connection.php';

if(isset($_POST['ins'])){
    $Email = $_POST['Email'];
    $Password = $_POST['Pass'];
    
    $emailSearch = "select * from user where Email = '$Email'";
    $query = mysqli_query($con, $emailSearch);
    $EmailCount = mysqli_num_rows($query);
    // echo $EmailCount;
    if ($EmailCount) {
        $res = mysqli_fetch_assoc($query);
        $_SESSION['db_Name'] = $res['Name']; 
        echo $_SESSION['db_Name'];
        $_SESSION['uid'] = $res['userId']; 
        $_SESSION['db_Role'] =$res['Tester_Role'];
        $db_Pass = $res['Password'];
        $pass_decode = password_verify($Password, $db_Pass);

        
        if ($pass_decode) {
            if($_SESSION['db_Role'] == "Admin"){
                echo "<script>window.location.href = '../Adminlayout/index.php'</script>";
            }
            elseif($_SESSION['db_Role'] == "CPLR")
            {
                echo "<script>alert('Login Successful');window.location.href = '../CompanyLayout/index.php'</script>";
            }
            elseif($_SESSION['db_Role'] == "SLR")
            {
                echo "<script>alert('Login Successful');window.location.href = '../LabortaryLayout/index.php'</script>";
            }
            // header('location:index.php');
        } else {
            echo "<script>alert('Password Incorrect');window.location.href = 'index.php'</script>";
        }
    } else {
        echo "<script>alert('Invalid Email');</script>";
    }
} ?>
