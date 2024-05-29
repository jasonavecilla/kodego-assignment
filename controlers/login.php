<?php

session_start();

include ("../includes/db-connect.php");

if($dbConn == true) {
    $sUsername = $_POST['username'];    
    $sPassword = $_POST['password'];

    $_SESSION['username'] = $sUsername;

    try {
        $qQuery = "SELECT `password` FROM `u955154186_db_llanes`.`tbl_reginfo` WHERE `username` = '$sUsername'";
        $eQuery = mysqli_query($dbConn, $qQuery);
        $nRowCount = mysqli_num_rows($eQuery);

        $rows = mysqli_fetch_array($eQuery);
        
        if( $nRowCount > 0 && $rows['password'] == $sPassword) {            
            echo "home.php";
            mysqli_close($dbConn);
        } else {
            echo "Username and password does not match!";
            mysqli_close($dbConn);
        }

    } catch(Exception $e) {
        echo "error";
    }

} else {
    echo 'failed to connect!';
}