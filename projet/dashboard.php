<?php
session_start();
if(empty($_SESSION["active"])){
    header('location: index.php');
}


?>

<?php
$mysqli = new mysqli('localhost', 'root', '', 'studentdb') or die (mysqli_error($mysqli));
$students=$mysqli->query("SELECT COUNT(id) FROM mystudents") or die (mysqli_error($mysqli)) ;
$student = $students->fetch_array();
$student = $student[0];

$courses=$mysqli->query("SELECT COUNT(course) FROM mycourses");
$course =$courses->fetch_array();
$course = $course[0];

$payments= $mysqli-> query("SELECT SUM(amount_paid) FROM mypayments");
$payment = $payments->fetch_array();
$payment = $payment[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style2.css">
    <script src="js/bootstrap.bundle.min.js" defer></script>
    <title>Dashboard</title>
</head>
<body>
<?php
    include 'navbar.php'
?>
    <?php
        include 'sidebar.php'
    ?>

<main class="dashbord float-end mt-4">
        <section class="first_section">
            <article class="article_1">
                <div class="ps-3">
                    <img src="img/student-blue.svg" alt="" class="pt-2">
                    <p class="text-muted">Student</p>
                </div>
                <p class="fs-4 fw-bolder numbers"><?php echo $student; ?></p>
            </article>
            <article class="article_2">
                <div class="ps-3">
                    <img src="img/course-pink.svg" alt="" class="pt-2">
                    <p class="text-muted">Course</p>
                </div>
               <p class="fs-4 fw-bolder numbers"><?php echo $course; ?></p>
            </article>
        </section>
        <section class="second_section">
            <article class="article_3">
                <div class="ps-3">
                    <img src="img/payment-info.svg" alt="" class="pt-2">
                    <p class="text-muted ">Payments</p>
                </div>
                <p class="fs-4 fw-bolder ps-5">DHS <?php echo $payment; ?></p>
            </article>
            <article class="article_4">
                <div class="ps-3">
                    <img src="img/Users.svg" alt="" class="pt-2">
                    <p class="text-white">Users</p>
                </div>
                <p class="fs-4 fw-bolder numbers">3</p>
            </article>
        </section>
    </main>
</body>
</html>