<?php
    include("includes/db-connect.php");
    //GET => query string, getting value from url
    $nId = $_GET['id'];

    $qSearch = "SELECT * FROM `u955154186_db_llanes`.`tbl_reginfo` WHERE `id` = '".$nId."'";
    $eSearch = mysqli_query($dbConn, $qSearch);

    $rows = mysqli_fetch_array($eSearch);   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit | CRUD | Assignment</title>

    <link rel="stylesheet" href="assets/bootstrap-5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>
    <?php include ("includes/header.php"); ?>


    <div class="row py-5">

    <h1 class="page-title">Update/Edit Entry</h1>

        <div class="container col-md-8 p-4 my-3 shadow rounded" style="background-color: #efefef;">
        
            <div class="form-wrapper is-active">
                <form class="form form-update">
                    <fieldset>
                        <input id="update-id" type="hidden" value="<?php echo $rows['id']; ?>">
                        <div class="d-flex flex-row">
                            <div class="input-block col-6 pe-1">
                                <label for="update-email">First Name</label>
                                <input id="update-fname" type="text" required value="<?php echo $rows['first_name']; ?>">
                            </div>
                            <div class="input-block col-6 ps-1">
                                <label for="update-email">Last Name</label>
                                <input id="update-lname" type="text" required value="<?php echo $rows['last_name']; ?>">
                            </div>
                        </div>
                        <div class="input-block">
                            <label for="update-email">E-mail</label>
                            <input id="update-email" type="email" required value="<?php echo $rows['email']; ?>">
                        </div>
                        <div class="input-block">
                            <label for="update-email">Username</label>
                            <input id="update-username" type="text" required value="<?php echo $rows['username']; ?>">
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-update" id="btn_update">Update</button>
                </form>
            </div>
        
        </div>

    </div>    
    
</body>

</html>
<script src="assets/bootstrap-5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.6.3.min.js"></script>
<script src="assets/js/update.js"></script>

