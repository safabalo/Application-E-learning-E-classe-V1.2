<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style1.css">
    <script src="js/bootstrap.bundle.min.js" defer></script>
    <title>E-class Login</title>
</head>
<body class="page vh-100">
    <section class="container-fluid bg-white sign_in p-3 w-md-75">
            <h1 class="mb-3 pt-2 px-2 ms-3 border-start border-5 border-info fw-bolder ms-3">E-classe</h1>
        <form>
            <fieldset>
                <div class="title_sign_in mb-3">
                    <legend class="fs-2 fw-bold"> Sign In </legend>
                    <p class="text-muted">Enter your credentials to access your account</p>
                </div>
                <div class="mb-3">
                    <label class="form-label ms-lg-3"> Email </label>
                    <input type="email" placeholder="Enter your email" class="form-control ms-lg-3 user_sing">
                </div>
                <a href="dashboard.php" class="mb-3 form-control btn btn-info text-white ms-lg-3 user_sing">
                        SEND
                </a>
                <p class="ms-3 text-muted">
                    An email will be sending to your mailbox <br> please check it.
                </p>
                <div class="ms-3 new_account">
                    <p class="text-muted">
                        You have an account
                        <a class="text-info active" href="index.php">Create a new account</a>
                    </p>
                </div>
                <div class="ms-3 new_account">
                    <p class="text-muted">
                        Don't have account yet?
                        <a class="text-info active" href="signup.php">Create a new account</a>
                    </p>
                </div>
                
            </fieldset>
        </form>
    </section>
</body>
</html>