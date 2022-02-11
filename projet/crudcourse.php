<?php
$mysqli = new mysqli('localhost', 'root', '', 'studentdb') or die (mysqli_error($mysqli));
$name = "";
$email = "";
$course ="";
$amount = "";
$update= false;
$id= 0;

if(isset($_POST['submit'])){
        $name = $_POST['name']; 
        $email = $_POST['email']; 
        $course_name = $_POST['course']; 
        $amount = $_POST['amount'];
        $id = $_GET['edit'];

$mysqli->query ("INSERT INTO mycourses(name, email, course, amount)
VALUES ('$name','$email', '$course_name', $amount)") or die($mysqli->error);

header("location: courses.php");
}
if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM mycourses WHERE id=$id") or die($mysqli->error);
        header("location: courses.php");
}
if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $courses= $mysqli->query("SELECT * FROM mycourses WHERE id= $id") or die($mysqli->error);
       if($courses -> num_rows >0){
               $course = $courses->fetch_array() ;
        //        $user = $users->fetch_all(PDO::FETCH_OBJ);
                $name = $course['name'];
                $email = $course['email'];
                $course_name = $course['course'];
                $amount = $course['amount'];
        }



}
if (isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email']; 
        $course_name = $_POST['course']; 
        $amount = $_POST['amount'];

$mysqli->query("UPDATE mycourses SET name= '$name', email= '$email', course= '$course_name', amount = $amount WHERE id=$id") or die($mysqli->error);

        header('location:courses.php');
}

?>