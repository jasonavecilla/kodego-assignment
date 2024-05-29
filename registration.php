<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login/Register | CRUD | Assignment</title>

    <link rel="stylesheet" href="assets/bootstrap-5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>
    <?php include ("includes/header.php"); ?>
    

    <section class="forms-section">
        <h1 class="section-title"></h1>

        <div class="forms">

            <div class="form-wrapper is-active">
            <button type="button" class="switcher switcher-login">
                Login
                <span class="underline"></span>
            </button>

            <form class="form form-login">
                <fieldset>
                <legend>Please, enter your username and password for login.</legend>
                <div class="input-block mt-5">
                    <label for="login-username">Username</label>
                    <input id="login-username" type="text" required>
                </div>
                <div class="input-block">
                    <label for="login-password">Password</label>
                    <input id="login-password" type="password" required>
                </div>
                <div><span class="err_msg"></span></div>
                </fieldset>
                <button type="button" class="btn-login2 mb-5" id="btn_login">Login</button>
            </form>
            </div>
            <div class="form-wrapper">

            <button type="button" class="switcher switcher-signup">
                Sign Up
                <span class="underline"></span>
            </button>

            <form class="form form-signup">
                <fieldset>
                <legend>Please, enter your name, email, password and password confirmation for sign up.</legend>

                <div class="d-flex flex-row">
                    <div class="input-block col-6 pe-1">
                        <label for="signup-fname">First Name</label>
                        <input id="signup-fname" type="text" required>
                    </div>
                    <div class="input-block col-6 ps-1">
                        <label for="signup-lname">Last Name</label>
                        <input id="signup-lname" type="text" required>
                    </div>
                </div>
                <div class="input-block">
                    <label for="signup-email">E-mail</label>
                    <input id="signup-email" type="email" required>
                </div>
                <div class="input-block">
                    <label for="signup-username">Username</label>
                    <input id="signup-username" type="text" required>
                </div>
                <div class="input-block">
                    <label for="signup-password">Password</label>
                    <input id="signup-password" type="password" required>
                </div>
                </fieldset>
                <button type="submit" class="btn-signup" id="btn_signup">Continue</button>
            </form>

            </div>

        </div>

    </section>


    
</body>

</html>
<script src="assets/bootstrap-5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.6.3.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/save.js"></script>
<script src="assets/js/login.js"></script>

