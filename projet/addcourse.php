<?php require('crudcourse.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style3.css">
    <script src="js/bootstrap.bundle.min.js" defer></script>
    <title>Add new student</title>
</head>
<body class="page vh-100">
    <form action="crudcourse.php" method="POST" class=" d-flex justify-content-center container-fluid bg-white sign_in p-3 w-md-75">
        <fieldset>
            <legend class="mb-3 align-self-start">Inserez un nouveau utilisateur</legend>
            <div class="mb-3">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <label class="form-label ms-lg-3"> Name </label>
            <input type="text" class="form-control" placeholder="your name" value="<?php echo $name; ?>" name="name">
            </div>
            <div class="mb-2">
            <label class="form-label ms-lg-3"> Email </label>
            <input type="email " class="form-control" placeholder="your Email" value="<?php echo $email; ?>" name="email">
            </div>
            <div class="mb-2">
            <label class="form-label ms-lg-3"> Course </label>
            <input type="tel" max="10" class="form-control" placeholder="your Phone" value="<?php echo $course_name; ?>" name="course">
            </div>
            <div class="mb-2">
            <label class="form-label ms-lg-3"> Amount </label>
            <input type="text" max="16" class="form-control" placeholder="your Enroll Number" value="<?php echo $amount; ?>" name="amount">
            </div>
            <?php
            if($update== true):
             ?>
             <input type="submit" value="update" name="update" class="bg-info rounded-1 border-0 p-2 mx-auto form-control mb-2">
             <?php
                else:
             ?>
            <input type="submit" value="submit" name="submit" class="bg-info rounded-1 border-0 p-2 mx-auto form-control mb-2">
            <?php endif; ?>
            <p class="error"><?php echo @$error ?></p>
            <p class="success"><?php echo @$success ?></p>
        </fieldset>
    </form>
</body>
</html>