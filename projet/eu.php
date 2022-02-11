<?php
$mysqli = new mysqli('localhost', 'root', '', 'studentdb') or die (mysqli_error($mysqli));
$name = "";
$pay = "";
$bill ="";
$amount = "";
$balance = "";
$update= false;
$id= 0;

if(isset($_POST['submit'])){
        $name = $_POST['name']; 
        $pay = $_POST['payment']; 
        $bill = $_POST['bill']; 
        $amount = $_POST['paid'];
        $balance= $_POST['balance'];
        $id = $_GET['edit'];

$mysqli->query ("INSERT INTO mypayments(name, payment_scheduel, bill_number, amount_paid, balance_amount)
VALUES ('$name','$pay', $bill, $amount, $balance)") or die($mysqli->error);

header("location: payment.php");
}
if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $payments= $mysqli->query("SELECT * FROM mypayments WHERE id= $id") or die($mysqli->error);
       if($payments -> num_rows >0){
               $payment = $payments->fetch_array() ;
        //        $user = $users->fetch_all(PDO::FETCH_OBJ);
            $name = $payment['name']; 
            $pay = $payment['payment_scheduel']; 
            $bill = $payment['bill_number']; 
            $amount = $payment['amount_paid'];
            $balance= $payment['balance_amount'];
        }



}
if (isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name']; 
        $pay = $_POST['payment']; 
        $bill = $_POST['bill']; 
        $amount = $_POST['paid'];
        $balance= $_POST['balance'];
$mysqli->query("UPDATE mypayments SET name= '$name', payment_scheduel= '$pay', bill_number= $bill , amount_paid = $amount , balance_amount = $balance WHERE id=$id") or die($mysqli->error);

        header('location:payment.php');
}

?>