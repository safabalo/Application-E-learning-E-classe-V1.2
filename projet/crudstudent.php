<?php
$mysqli = new mysqli('localhost', 'root', '', 'studentdb') or die (mysqli_error($mysqli));
$name = "";
$email = "";
$phone ="";
$enroll_number = "";
$update= false;
$id= 0;

if(isset($_POST['submit'])){
        $name = $_POST['name']; 
        $email = $_POST['email']; 
        $phone = $_POST['phone']; 
        $enroll_number = $_POST['enrollnu'];
        $id = $_GET['edit'];



        $mysqli->query ("INSERT INTO mystudents (name, email, phone, enroll_number)
         VALUES ('$name','$email',$phone , $enroll_number)") or die($mysqli->error);

header("location: student.php");
}
if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM mystudents WHERE id=$id") or die($mysqli->error);
        header("location: student.php");
}
if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $users= $mysqli->query("SELECT * FROM mystudents WHERE id= $id") or die($mysqli->error);
       if($users -> num_rows >0){
               $user = $users->fetch_array() ;
        //        $user = $users->fetch_all(PDO::FETCH_OBJ);
                $name = $user['name'];
                $email = $user['email'];
                $phone = $user['phone'];
                $enroll_number = $user['enroll_number'];
        }



}
if (isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email']; 
        $phone = $_POST['phone']; 
        $enroll_number = $_POST['enrollnu'];

$mysqli->query("UPDATE mystudents SET name= '$name', email= '$email', phone= $phone, enroll_number = $enroll_number WHERE id=$id") or die($mysqli->error);

        header('location:student.php');
}

?>