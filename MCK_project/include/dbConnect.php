<?php
    #=======================================================================
    $db_host = "localhost";
    $db_user = "root";
    $db_passwd = "gritYCDA";
    $db_name = "watcha_project";
    $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

    if (mysqli_connect_errno($conn)){
        echo "Database connection failed: ".mysqli_connect_error();
    }else{
        echo "connect DB_1     <br>";
    }
    #=======================================================================
?> 