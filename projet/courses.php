<?php
session_start();
if(empty($_SESSION["active"])){
    header('location: index.php');
    die();
}
require('crudcourse.php');
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
    <title>Courses</title>
</head>

<body class="body">
    <?php
    include 'navbar.php';
?>
    <?php
        include 'sidebar.php';
    ?>
    <main class="main float-end mt-4">
        <article class="">
            <div class="d-flex justify-content-between student__list ms-2">
                <h2 class="h1">Courses list</h2>
                <div>
                    <img src="img/Up-Down.svg" alt="" class="me-2">
                    <button class="btn btn-info text-white addStudent">ADD NEW Course</button>
                </div>

            </div>


            <table class="table student_table ">
                <thead class="table-head">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="thead__elements">Name</th>
                        <th scope="col" class="thead__elements">Email</th>
                        <th scope="col" class="thead__elements">Course</th>
                        <th scope="col" class="thead__elements">Amout</th>
                        <th scope="col" class="thead__elements">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                              include('mysqli.php');
                                $courses= $mysqli->query ("SELECT * FROM  mycourses") or die($mysqli->error);
                                foreach($courses as $course) : 
                                   ?>
                    <tr class="table__elements">
                        <th scope="row"><img src="img/user-profile.png" alt="user_svg"></th>
                        <td><?php echo $course['name'];?></td>
                        <td><?php echo $course['email'];?></td>
                        <td><?php echo $course['course'];?></td>
                        <td><?php echo $course['amount'];?></td>
                        <td><?php echo $course['date'];?></td>
                        <td>
                            <a href="addcourse.php?edit=<?php echo $course['id']; ?>" class="addStudent">
                                <img src="img/Pen.svg" alt="edit">
                            </a>

                        </td>
                        <td>
                            <a href="crudcourse.php?delete=<?php echo $course['id']; ?>">
                                <img src="img/Garbage.svg" alt="delete">
                            </a>

                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </article>
        <div class="overlay">
            <form action="crudcourse.php" method="POST"
                class=" d-flex justify-content-center container-fluid bg-white sign_in p-3 w-md-75">

                <fieldset>
                    <button type="button" class="btn btn-white text-dark float-end button_x" onclick="hide()">x</button>
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
                        <label class="form-label ms-lg-3"> Course </label>
                        <input type="tel" max="10" class="form-control" placeholder="your Phone"
                            value="<?php echo $course_name; ?>" name="course">
                    </div>
                    <div class="mb-2">
                        <label class="form-label ms-lg-3"> Amount </label>
                        <input type="text" max="16" class="form-control" placeholder="your Enroll Number"
                            value="<?php echo $amount; ?>" name="amount">
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
    </main>
</body>

</html>