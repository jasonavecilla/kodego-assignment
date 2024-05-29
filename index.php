<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home | CRUD | Assignment</title>

    <link rel="stylesheet" href="assets/bootstrap-5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>
    <?php include ("includes/header.php"); ?>

    <div class="row p-4 p-md-5">

        <h1 class="page-title">Registration List</h1>

        <div class="container p-0 my-3 shadow rounded" style="background-color: #efefef;">    

            <div class="div_reg_list" id="div-reg-list">

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

            </div>
        
        </div>

    </div>
    
</body>

</html>
<script src="assets/bootstrap-5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.6.3.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/fetch.js"></script>

