<?php require('users.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style4.css">
    <script src="js/bootstrap.bundle.min.js" defer></script>
    <script src="js/inputs.js" defer></script>
    <title>E-class Login</title>
</head>

<body class="page vh-100">
    <section class="container-fluid bg-white sign_in p-3 w-md-75 formulaire">
        <h1 class="mb-3 pt-2 px-2 ms-3 border-start border-5 border-info fw-bolder ms-3">E-classe</h1>
        <div id="error"></div>

        <form action="users.php" method="POST" id="form">
            <fieldset>
                <div class="title_sign_in mb-3">
                    <legend class="fs-2 fw-bold"> Sign UP </legend>
                    <p class="text-muted">Enter your credentials to access your account</p>
                </div>
                <div class="mb-1">
                    <label class="form-label ms-lg-3"> First Name </label>
                    <input type="text" placeholder="Enter your First name" name="first_name"
                        class="form-control ms-lg-3 user_sing" id="fname" required>
                </div>
                <div class="mb-1">
                    <label class="form-label ms-lg-3"> Last Name </label>
                    <input type="text" placeholder="Enter your Last name" name="last_name"
                        class="form-control ms-lg-3 user_sing" id="lname" required>
                </div>
                <div class="mb-1">
                    <label class="form-label ms-lg-3"> Email </label>
                    <input type="email" placeholder="Enter your email" name="email"
                        class="form-control ms-lg-3 user_sing success error" id="email" required>
                </div>
                <div class="mb-1">
                    <label class="form-label ms-lg-3"> Password </label>
                    <input type="password" placeholder="Enter your password" name="password" id="password"
                        class="form-control ms-lg-3 user_sing success error" required>
                </div>
                <div class="mb-3">
                    <label class="form-label ms-lg-3"> Confirm Password </label>
                    <input type="password" placeholder="Enter your password" name="confirmpassword" id="confirmpassword"
                        class="form-control ms-lg-3 user_sing" required>
                </div>
                <input type="submit" name="submit" class="mb-3 form-control btn btn-info text-white ms-lg-3 user_sing"
                    value="SIGN UP">

            </fieldset>
        </form>
    </section>
</body>

</html>