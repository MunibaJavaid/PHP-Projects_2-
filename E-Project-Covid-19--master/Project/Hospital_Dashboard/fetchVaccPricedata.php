<?php include '../includes/connection.php'; ?>
<?php if (isset($_POST['get_option'])) {
    $state = $_POST['get_option'];
    $find = "select Price from vaccination where Vacid='$state'";
    $res = mysqli_query($con, $find);
    $row = mysqli_fetch_array($res);
    echo $row['Price'];
} ?>
