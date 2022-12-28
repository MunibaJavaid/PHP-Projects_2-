<?php include 'header.php'; ?>
<?php include '../confiq/connection.php'; ?>

<?php

    if(isset($_POST['remark']))
    {
        $proId = $_POST['prodId'];
 
        $remarks = $_POST['remarks'];
     
        $status = $_POST['result'];


        $uid = $_SESSION['uid'];
    
      
      
            $query = "insert into companytesting(u_id, prodId, Remarks, Result) 
            values( '$uid', '$proId', '$remarks', '$status')";
            $res = mysqli_query($con, $query);
            if($res)
            {
                echo "<script>alert('Data Inserted Succesfully');window.location.href = 'index.php';</script>";
      
            }
            else
            {
                echo "<script>alert('Data insertion Failed');</script>";

            }
        
        
        

    }
?>