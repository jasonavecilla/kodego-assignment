<?php

include ("../includes/db-connect.php");

if($dbConn == true) {

    $sFname = $_POST['fname'];
    $sLname = $_POST['lname'];
    $sEmail = $_POST['email'];
    $sUsername = $_POST['username'];
    $sPassword = $_POST['password'];

    
    $qQuery = "SELECT `password` FROM `u955154186_db_llanes`.`tbl_reginfo` WHERE `username` = '$sUsername'";
    $eQuery = mysqli_query($dbConn, $qQuery);
    $nRowCount = mysqli_num_rows($eQuery);

    if ($nRowCount > 0) {
        echo "Username already exist!";
    } else {
        try {
            $qInsert = "INSERT INTO `u955154186_db_llanes`.`tbl_reginfo` 
                (`first_name`, `last_name`, `email`, `username`,`password`, `entrydate`) 
                VALUES 
                ('".$sFname."', '{$sLname}', '{$sEmail}', '{$sUsername}', '{$sPassword}', '".date("Y-m-d H:i:s")."')
            ";
            
            $eInsert = mysqli_query($dbConn, $qInsert); //connection and query
    
            if ($eInsert == true) {
                echo "Record successfully saved!";
                mysqli_close($dbConn);
            } else {
                echo "Failed to process, please call system administrator!";
                mysqli_close($dbConn);
            }
    
        } catch(Exception $e) {
            echo "error";
        }
    }    

} else {
    echo 'failed to connect!';
}