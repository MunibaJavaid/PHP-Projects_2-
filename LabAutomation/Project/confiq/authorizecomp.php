<?php
session_start();
    if(!isset($_SESSION['db_Role']))
    {
        echo "<script>alert('Unauthorized To Access');window.location.href = '../userlayout/index.php'</script>";
    }
    
    elseif($_SESSION['db_Role'] != 'CPLR')
    {
        echo "<script>alert('Unauthorized To Access');window.location.href = '../userlayout/index.php'</script>";
    }

?>