<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="js/bootstrap.bundle.min.js" defer></script>
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
        <article class="" >
            <div class="d-flex justify-content-between student__list ms-2">
                <h2 class="h1">Courses list</h2>
                <div>
                    <img src="img/Up-Down.svg" alt="" class="me-2">
                    <a class="btn btn-info text-white" href="addcourse.php">ADD NEW Course</a>
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
                              $mysqli = new mysqli('sql205.epizy.com', 'epiz_30911780', 'tqcSUrV5Dkdctjf', 'epiz_30911780_studentdb') or die (mysqli_error($mysqli));
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
                                        <a href="addcourse.php?edit=<?php echo $course['id']; ?>">
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
</body>
</html>