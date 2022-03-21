<?php
session_start();
if(empty($_SESSION["active"])){
    header('location:index.php');
}
 require('crudstudent.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="js/bootstrap.bundle.min.js" defer></script>
    <script src="js/forms.js" defer></script>
    <title>Student</title>
</head>

<body class="body">
    <?php
    include 'navbar.php';
?>
    <?php
        include 'sidebar.php';
    ?>
    <main class="main float-end mt-4">
        <div class="">
            <div class="d-flex justify-content-between student__list ms-2">
                <h2 class="h1">Student list</h2>
                <div>
                    <img src="img/Up-Down.svg" alt="" class="me-2">
                    <button class="btn btn-info text-white addStudent">ADD NEW STUDENT</button>
                </div>

            </div>
            <table class="table student_table ">
                <thead class="table-head">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="thead__elements">Name</th>
                        <th scope="col" class="thead__elements">Email</th>
                        <th scope="col" class="thead__elements">Phone</th>
                        <th scope="col" class="thead__elements">Enroll Number</th>
                        <th scope="col" class="thead__elements">Date of admission</th>
                    </tr>
                </thead>
                <tbody>


                    <?php 
                                include('mysqli.php');
                                $users= $mysqli->query ("SELECT * FROM  mystudents") or die($mysqli->error);
                                foreach($users as $user) : 
                                   ?>
                    <tr class="table__elements">
                        <th scope="row"><img src="img/user-profile.png" alt="user_svg"></th>
                        <td><?php echo $user['name'];?></td>
                        <td><?php echo $user['email'];?></td>
                        <td><?php echo $user['phone'];?></td>
                        <td><?php echo $user['enroll_number'];?></td>
                        <td><?php echo $user['date_of_admission'];?></td>
                        <td>
                            <a href="student.php?edit=<?php echo $user['id']; ?>" class="addStudent">
                                <img src=" img/Pen.svg" alt="edit">
                            </a>

                        </td>
                        <td>
                            <a href="crudstudent.php?delete=<?php echo $user['id']; ?>">
                                <img src="img/Garbage.svg" alt="delete">
                            </a>

                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="overlay">
            <form action="crudstudent.php" method="POST" id="form"
                class="bg-white d-flex justify-content-center container-fluid bg-white sign_in p-3 w-md-75">
                <fieldset>
                    <button type="button" class="btn btn-white text-dark float-end button_x" onclick="hide()">x</button>
                    <legend class="mb-3 align-self-start">Inserez un nouveau utilisateur</legend>
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <label class="form-label ms-lg-3"> Name </label>
                        <input type="text" class="input form-control" placeholder="your name"
                            value="<?php echo $name; ?>" name="name" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label ms-lg-3"> Email </label>
                        <input type="email " class="input form-control" placeholder="your Email"
                            value="<?php echo $email; ?>" name="email" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label ms-lg-3"> Phone </label>
                        <input type="tel" max="10" class="input form-control" placeholder="your Phone"
                            value="<?php echo $phone; ?>" name="phone" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label ms-lg-3"> Enroll Number </label>
                        <input type="text" max="16" class="input form-control" placeholder="your Enroll Number"
                            value="<?php echo $enroll_number; ?>" name="enrollnu" required>
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
            </form>
        </div>
</body>

</html>