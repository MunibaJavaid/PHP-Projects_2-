<?php
    if(!isset($_SESSION['db_Role'])){
        echo "<script>alert('Unauthorize to Access!!');window.location.href = '../Main_Layout/index.php'</script>";
    }
    elseif($_SESSION['db_Role'] != "H"){
        echo "<script>alert('Unauthorize to Access!!');window.location.href = '../Main_Layout/index.php'</script>";
    }
    
?>