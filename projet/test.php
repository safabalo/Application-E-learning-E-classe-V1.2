<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="js/bootstrap.bundle.min.js" defer></script>
    <title>E-class Login</title>
</head>

<body class="page vh-100">

    <div class="overlay">

        <form action="crudstudent.php" method="POST"
            class="bg-white d-flex justify-content-center container-fluid bg-white sign_in p-3 w-md-75">
            <fieldset>
                <button class="btn btn-white text-dark float-end button_x">x</button>
                <legend class="mb-3 align-self-start">Inserez un nouveau utilisateur</legend>
                <div class="mb-3">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <label class="form-label ms-lg-3"> Name </label>
                    <input type="text" class="form-control" placeholder="your name" value="<?php echo $name; ?>"
                        name="name">
                </div>
                <div class="mb-2">
                    <label class="form-label ms-lg-3"> Email </label>
                    <input type="email " class="form-control" placeholder="your Email" value="<?php echo $email; ?>"
                        name="email">
                </div>
                <div class="mb-2">
                    <label class="form-label ms-lg-3"> Phone </label>
                    <input type="tel" max="10" class="form-control" placeholder="your Phone"
                        value="<?php echo $phone; ?>" name="phone">
                </div>
                <div class="mb-2">
                    <label class="form-label ms-lg-3"> Enroll Number </label>
                    <input type="text" max="16" class="form-control" placeholder="your Enroll Number"
                        value="<?php echo $enroll_number; ?>" name="enrollnu">
                </div>
                <?php
            if($update== true):
             ?>
                <input type="submit" value="update" name="update"
                    class="bg-info rounded-1 border-0 p-2 mx-auto form-control mb-2">
                <?php
                else:
             ?>
                <input type="submit" value="submit" name="submit"
                    class="bg-info rounded-1 border-0 p-2 mx-auto form-control mb-2">
                <?php endif; ?>
                <p class="error"><?php echo @$error ?></p>
                <p class="success"><?php echo @$success ?></p>
            </fieldset>
        </form> <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add User</h5>
                        <button type=" button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="crudstudent.php" method="POST"
                            class="bg-white d-flex justify-content-center container-fluid bg-white sign_in p-3 w-md-75">
                            <fieldset>
                                <!-- <legend class="mb-3 align-self-start">Inserez un nouveau utilisateur</legend> -->
                                <div class="mb-3">
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <label class="form-label ms-lg-3"> Name </label>
                                    <input type="text" class="form-control" placeholder="your name"
                                        value="<?php echo $name; ?>" name="name">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label ms-lg-3"> Email </label>
                                    <input type="email " class="form-control" placeholder="your Email"
                                        value="<?php echo $email; ?>" name="email">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label ms-lg-3"> Phone </label>
                                    <input type="tel" max="10" class="form-control" placeholder="your Phone"
                                        value="<?php echo $phone; ?>" name="phone">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label ms-lg-3"> Enroll Number </label>
                                    <input type="text" max="16" class="form-control" placeholder="your Enroll Number"
                                        value="<?php echo $enroll_number; ?>" name="enrollnu">
                                </div>
                                <?php
                            if($update== true):
                            ?>
                                <input type="submit" value="update" name="update"
                                    class="bg-info rounded-1 border-0 p-2 mx-auto form-control mb-2">
                                <?php
                              else:
                              ?>
                                <input type="submit" value="submit" name="submit"
                                    class="bg-info rounded-1 border-0 p-2 mx-auto form-control mb-2">
                                <?php endif; ?>
                                <p class="error"><?php echo @$error ?></p>
                                <p class="success"><?php echo @$success ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>