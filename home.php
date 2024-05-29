<?php
    session_start();

    if(isset($_SESSION['username']) && $_SESSION['username'] != "") {
        $sUserSession = $_SESSION['username'];
    } else {
        $sUserSession = 'Please login';
        header("Location: registration.php");
        exit();
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home | CRUD | Assignment</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="assets/bootstrap-5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>
    <?php include ("includes/header.php"); ?>

    <div class="row p-4 p-md-5">

        <h1 class="page-title">Welcome<br/><?php echo $sUserSession; ?></h1>

        <div class="container p-0 my-3">    

            <!-- <div class="div_reg_list" id="div-reg-list">

                <table class='table table-striped table-hover mb-0'>
                    <thead>
                        <th>ID</th>    
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Registration Date</th>
                        <th>Action</th>
                    </thead>
                    <tbody id="tbl-reg-list">
                    </tbody>
                </table>

            </div class="row p-4"> -->

            <div class="div-card-reglist d-flex flex-row justify-content-between flex-wrap" id="div-card-reglist">

                <!-- <div class="card mb-3" style="width: 32%;">
                    <div class="card-body">
                        <h5 class="card-title">Last Name, First Name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">ID #</h6>
                        <ul style="list-style:none;">
                            <li><i class="fa-solid fa-envelope"></i> Email</li>
                        </ul>
                        <div class="d-flex flex-row justify-content-between">
                            <button class="btn btn-info">Edit</button>
                            <button class="btn btn-danger">Remove</button>
                        </div>
                    </div>
                </div> -->

            </div>
        
        </div>

    </div>
    
</body>

</html>
<script src="assets/bootstrap-5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.6.3.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/fetch.js"></script>

