<?php 
    session_start();
    if(isset($_SESSION["active"])){
        header('location: dashboard.php');
    }
    $message = "" ;
    if(count($_POST)>0) {
        if(empty($_POST['email']) || empty($_POST['password'])){
            $message="Email or password empty !";
        }else{
        $mysqli = mysqli_connect('localhost', 'root', '', 'studentdb') or die('Unable To connect');
        $new_user = $mysqli->query("SELECT * FROM users_login WHERE email='" . $_POST["email"] . "' and password ='". $_POST["password"]."'");
        $user  = mysqli_fetch_array($new_user);
        
        if(is_array($user)) {
            $_SESSION["id"] = $user['id'];
            $_SESSION["first_name"] = $user['first_name'];
            $_SESSION["last_name"] = $user['last_name'];
            if(isset($_POST['remember'])){
                $rem = $_POST['remember'];
                setcookie('email',$_POST['email'], time()+3600*24); 
            }
            
        } else {
            $message = "Invalid Username or Password!";
        }
        
    }
    }
    if(isset($_SESSION["id"])) {
        header("location: dashboard.php");
        $_SESSION["active"] = 'yessssssssssssss';
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style1.css">
    <script src="js/bootstrap.bundle.min.js" defer></script>
    <script src="js/inputs.js" defer></script>

    <title>E-class Login</title>
</head>

<body class="page vh-100">
    <section class="container-fluid bg-white sign_in p-3 w-md-75 formulaire">
        <h1 class="mb-3 pt-2 px-2 ms-3 border-start border-5 border-info fw-bolder ms-3">E-classe</h1>
        <div id="error"></div>
        <form action="" method="POST" id="form">
            <fieldset>
                <div class="title_sign_in mb-3">
                    <legend class="fs-2 fw-bold"> Sign In </legend>
                    <p class="text-muted">Enter your credentials to access your account</p>
                    <div class="message text-danger ms-3 mb-2">
                        <?php if($message!="") { echo $message; } ?>
                    </div>
                    <div id="error">
                    </div>
                </div>
                <div class="mb-3 user_email">
                    <label class="form-label ms-lg-3"> Email </label>
                    <input type="email" placeholder="Enter your email"
                        class="form-control ms-lg-3 user_sing success error" name="email" id="email"
                        value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : "" ;?>" required>
                </div>

                <div class="mb-4 user_pass">
                    <label class="form-label ms-lg-3"> Password </label>
                    <input type="password" placeholder="Enter your password"
                        class="form-control ms-lg-3 user_sing success error" name="password" id="password" required>

                </div>
                <input type="submit" value="SIGN IN" name="login"
                    class="mb-3 form-control btn btn-info text-white ms-lg-3 user_sing">
                <div class="ms-3">
                    <input type="checkbox" name="remember" id="remember">
                    <label class="form-label text-info" for="remember"> Remember Me </label>
                </div>

                <div class="ms-3 new_account">
                    <p class="text-muted">
                        Don't have account yet?
                        <a class="text-info active" href="signup.php">Create a new account</a>
                    </p>
                </div>
                <div class="ms-3 forget_password mb-4">
                    <p class="text-muted">
                        forget your password?
                        <a class="text-info active" href="forget.php">Reset your password</a>
                    </p>
                </div>

            </fieldset>
        </form>
    </section>
</body>

</html>