<?php include 'header.php'; ?>



<?php include '../includes/connection.php'; ?>


<!-- Data Insert Code -->
<?php if (isset($_POST['ins'])) {
    $Name = $_POST['name'];
    $CName = $_POST['cName'];
    $Price = $_POST['price'];
    $VacDate = date('Y-m-d');
    $VacStatus = $_POST['vacStatus'];
    $ProDesc = $_POST['Proddesc'];
    $Hos_Name = $_SESSION['db_Name'];
    echo $Hos_ID;

    // print_r($_POST['ins']);

    $FileProp = $_FILES['uploaded'];
    // echo '<pre>';
    //     print_r($FileProp);
    // echo '</pre>';
    $FileName = $_FILES['uploaded']['name'];
    $FileType = $_FILES['uploaded']['type'];
    $FileTempLoc = $_FILES['uploaded']['tmp_name'];
    $FileSize = $_FILES['uploaded']['size'];

    $folder = '../Main_Layout/assets/images/';

    if (
        strtolower($FileType) == 'image/jpeg' ||
        strtolower($FileType) == 'image/jpg' ||
        strtolower($FileType) == 'image/png'
    ) {
        if ($FileSize <= 1000000) {
            //1MB likha hai bytes mai convert kar k

            $folder = $folder . $FileName;
            $query = "insert into vaccination (NameVac,Date,Price,Description,Status,Hospital_Name,Vac_Img) values ('$Name',' $VacDate','$Price','$ProDesc','$VacStatus','$Hos_Name','$folder')";
            $res = mysqli_query($con, $query);
            if ($res) {
                echo "<script>alert('Data Inserted Successfully');window.location.href = 'Product_View.php';</script>";
                move_uploaded_file($FileTempLoc, $folder);
            } else {
                echo "<script>alert('Data Insertion Failed');window.location.href = 'Product_View.php';</script>";
            }
        } else {
            echo "<script>alert('Image should be less than 1MB !! ');window.location.href = 'Product_View.php';</script>";
        }
    } else {
        echo "<script>alert('Image Formate not supported!! ');window.location.href = 'Product_View.php';</script>";
    }
} ?>



<!-- Data Update Code -->

<?php if (isset($_POST['up'])) {
    $VaccId = $_POST['vacId'];
    $Name = $_POST['name'];
    $CName = $_POST['cName'];
    $Price = $_POST['price'];
    $VacDate = date('Y-m-d');
    $VacStatus = $_POST['vacStatus'];
    $ProDesc = $_POST['Proddesc'];
    $Hos_Name = $_SESSION['db_Name'];
    echo $Hos_ID;

    // print_r($_POST['ins']);

    $FileProp = $_FILES['uploaded'];
    // echo '<pre>';
    //     print_r($FileProp);
    // echo '</pre>';
    $FileName = $_FILES['uploaded']['name'];
    $FileType = $_FILES['uploaded']['type'];
    $FileTempLoc = $_FILES['uploaded']['tmp_name'];
    $FileSize = $_FILES['uploaded']['size'];

    $folder = '../Main_Layout/assets/images/';

    if (is_uploaded_file($_FILES['uploaded']['tmp_name'])) {
        if (
            strtolower($FileType) == 'image/jpeg' ||
            strtolower($FileType) == 'image/jpg' ||
            strtolower($FileType) == 'image/png'
        ) {
            if ($FileSize <= 1000000) {
                //1MB likha hai bytes mai convert kar k

                $folder = $folder . $FileName;
                $query = "update vaccination set Name = '$Name',Price ='$Price',Status = '$VacStatus',Vac_Img = '$folder'
                         where Vacid = '$VaccId'";

                $res = mysqli_query($con, $query);
                if ($res) {
                    echo "<script>alert('Data Updated Successfully');window.location.href = 'Product_View.php';</script>";
                    move_uploaded_file($FileTempLoc, $folder);
                } else {
                    echo "<script>alert('Data not updated')</script>";
                }
            } else {
                echo "<script>alert('Image should be less than 1MB !! ');window.location.href = 'ViewData.php';</script>";
            }
        } else {
            echo "<script>alert('Image Formate not supported!! ');window.location.href = 'ViewData.php';</script>";
        }
    } else {
        $query = "update vaccination set Name = '$Name',Price ='$Price',Status = '$VacStatus' where Vacid = '$VaccId'";

        $res = mysqli_query($con, $query);
        if ($res) {
            echo "<script>alert('Data Updated Successfully');window.location.href = 'Product_View.php';</script>";
            move_uploaded_file($FileTempLoc, $folder);
        } else {
            echo "<script>alert('Data not updated')</script>";
        }
    }
} ?>
