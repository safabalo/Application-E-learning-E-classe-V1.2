<?php
$mysqli = new mysqli('localhost', 'root', '', 'studentdb') or die (mysqli_error($mysqli));

if(isset($_POST['submit'])){
        $first_name = $_POST['first_name']; 
        $last_name = $_POST['last_name']; 
        $email = $_POST['email']; 
        $password = $_POST['password'];

$mysqli->query ("INSERT INTO users_login(first_name, last_name, email, password)
VALUES ('$first_name', '$last_name','$email', '$password')") or die($mysqli->error);

header("location: index.php");
}