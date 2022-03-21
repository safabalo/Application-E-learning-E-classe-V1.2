<?php
        $email="";
        $password="";
        $update=false;
        $id=0;
        $mysqli= mysqli_connect('sql205.epizy.com', 'epiz_30911780', 'tqcSUrV5Dkdctjf', 'epiz_30911780_studentdb') or die(mysqli_error($mysqli));
        if(isset($_POST['submit'])){
            $email= $_POST['email'];
            $password= $_POST['password'];
            $id= $_GET['id'];
            $test= $mysqli->query("INSERT INTO testing(email,password)
            VALUES ('$email','$password')") or die($mysqli->error);
            header("location: page.php");
        }
        if(isset($_GET['id'])){
            $update=true;
            $test= $mysqli->query("SELECT * FROM testing WHERE id=$id") or die($mysqli->error);
            if($test->num_rows>0){
                $testing= $test->fetch_array();
                $email= $testing['email'];
                $password= $testing['password'];
            }  
        }
        if(isset($_POST['update'])){
            $id= $_POST['id'];
            $email= $_POST['email'];
            $password= $_POST['password'];
            $test= $mysqli->query("UPDATE testing SET email='$email', passwordWHERE id=$id") or die($mysqli->error);
        }
        
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js" defer></script>
    <title>form</title>
</head>
<body>
    <form method="POST">
        <fieldset>
            <legend>Crud</legend>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <input type="password" name="password" value="<?php echo $password; ?>">
            <?php if ($update== true): ?>
            <input type="submit" value="update" name="update">
            <?php else: ?>
            <input type="submit" value="submit" name="submit">
            <?php endif;?>
        </fieldset>
    </form>
    
</body>
</html>