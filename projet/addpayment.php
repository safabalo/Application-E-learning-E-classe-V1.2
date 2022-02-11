<?php require('eu.php') ?>
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
    <form action="eu.php" method="POST" class="bg-white d-flex justify-content-center container-fluid bg-white sign_in p-3 w-md-75">
        <fieldset>
            <legend class="mb-3 align-self-start">Inserez un nouveau utilisateur</legend>
            <div class="mb-3">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label class="form-label ms-lg-3"> Name </label>
            <input type="text" class="form-control" placeholder="name" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="mb-2">
            <label class="form-label ms-lg-3"> Payment scheduel </label>
            <input type="text" class="form-control" placeholder="payment scheduel" name="payment" value="<?php echo $pay; ?>">
            </div>
            <div class="mb-2">
            <label class="form-label ms-lg-3"> Bill number </label>
            <input type="text" max="16" class="form-control" placeholder="bill number" name="bill" value="<?php echo $bill; ?>">
            </div>
            <div class="mb-2">
            <label class="form-label ms-lg-3"> Paid amount </label>
            <input type="text" max="16" class="form-control" placeholder="paid amount" name="paid" value="<?php echo $amount; ?>">
            </div>
            <div class="mb-2">
            <label class="form-label ms-lg-3"> Balance amount </label>
            <input type="text" max="16" class="form-control" placeholder="balance amount" name="balance" value="<?php echo $balance; ?>">
            </div>
            <div class="mb-3">
            <label class="form-label ms-lg-3"> Date of admission </label>
            <input type="date" class="form-control" name="date" value="<?php echo $date; ?>">
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