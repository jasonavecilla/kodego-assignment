<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | CRUD | Assignment</title>

    <link rel="stylesheet" href="assets/bootstrap-5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>
    <?php include ("includes/header.php"); ?>


    <div class="row py-5">

    <h1 class="page-title">Login</h1>

        <div class="container col-md-8 p-4 my-3 shadow rounded" style="background-color: #efefef;">
        
            <div class="form-wrapper is-active">
                
                <div class="input-block mt-5">
                    <label for="login-username">Username</label>
                    <input id="login-username" type="text" required>
                </div>
                <div class="input-block">
                    <label for="login-password">Password</label>
                    <input id="login-password" type="password" required>
                </div>
                
                <button type="submit" class="btn-login2 mb-5" id="btn_login">Login</button>
                
            </div>
        
        </div>

    </div>    
    
</body>

</html>
<script src="assets/bootstrap-5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.6.3.min.js"></script>
<script src="assets/js/login.js"></script>

