
<?php include '../confiq/connection.php'; ?>




<?php

    if(isset($_POST['prdins']))
    {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $status = $_POST['status'];
        $category = $_POST['category'];
        
        $file = $_FILES['uploaded'];

        $filename = $_FILES['uploaded']['name'];
        $filetype = $_FILES['uploaded']['type'];
        $filetemploc = $_FILES['uploaded']['tmp_name'];
        $filesize = $_FILES['uploaded']['size'];

        $folder = "../Adminlayout/assets/images/";

        if(strtolower($filetype)=="image/jpeg" || strtolower($filetype)=="image/jpg" || strtolower($filetype)=="image/png")
        {
            $folder = $folder.$filename;
            $query = "insert into manufactureproducts(Prodname, Price, description, category, Image, Status) 
            values('$name', '$price', '$description', '$category', '$folder', '$status')";
            $res = mysqli_query($con, $query);
            if($res)
            {
                echo "<script>alert('Data Inserted Succesfully');window.location.href = 'index.php';</script>";
                move_uploaded_file($filetemploc, $folder); 
            }
            else
            {
                echo "<script>alert('Data insertion Failed');</script>";

            }
        }
        else{
            echo "<script>alert('Image Formate not supported!! ');window.location.href = 'ViewData.php';</script>";
        }
        

    }

    if(isset($_POST['prdupd']))
    {
        $prodId = $_POST['prodId'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $status = $_POST['status'];
        
        $file = $_FILES['uploaded'];

        $filename = $_FILES['uploaded']['name'];
        $filetype = $_FILES['uploaded']['type'];
        $filetemploc = $_FILES['uploaded']['tmp_name'];
        $filesize = $_FILES['uploaded']['size'];

        $folder = "assets/images/";

        if(is_uploaded_file($_FILES['uploaded']['tmp_name']))
        {
            if(strtolower($filetype)=="image/jpeg" || strtolower($filetype)=="image/jpg" || strtolower($filetype)=="image/png")
        {
            $folder = $folder.$filename;
            $query = "update manufactureproducts set Prodname = '$name', Price = '$price', 
            description = '$description', Image = '$folder', Status = '$status' where ProdId = '$prodId'";
            $res = mysqli_query($con, $query);
            if($res)
            {
                echo "<script>alert('Data Inserted Succesfully');window.location.href = 'index.php';</script>";
                move_uploaded_file($filetemploc, $folder); 
            }
            else
            {
                echo "<script>alert('Data insertion Failed');</script>";

            }
        }
        else{
            echo "<script>alert('Image Formate not supported!! ');window.location.href = 'ViewData.php';</script>";
        }
        }
        else
        {
       
            $query = "update manufactureproducts set Prodname = '$name', Price = '$price', 
            description = '$description', Status = '$status' where ProdId = '$prodId'";
            $res = mysqli_query($con, $query);
            if($res)
            {
                echo "<script>alert('Data Inserted Succesfully');window.location.href = 'index.php';</script>";
                move_uploaded_file($filetemploc, $folder); 
            }
            else
            {
                echo "<script>alert('Data insertion Failed');</script>";

            }
        
       
        }
        

    }


?>