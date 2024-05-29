<?php

include ("../includes/db-connect.php");

if($dbConn == true) {
    $nId = $_POST['id'];  

    try {
        $qUpdate = "UPDATE `u955154186_db_llanes`.`tbl_reginfo` 
            SET `deldate` = '".date("Y-m-d H:i:s")."'
            WHERE `id` = '{$nId}'
        ";
        

        $eUpdate = mysqli_query($dbConn, $qUpdate); //connection and query

        if ($eUpdate == true) {
            echo "home.php";
            mysqli_close($dbConn);
        } else {
            echo "Failed to process, please call system administrator!";
            mysqli_close($dbConn);
        }

    } catch(Exception $e) {
        echo "error";
    }

} else {
    echo 'failed to connect!';
}