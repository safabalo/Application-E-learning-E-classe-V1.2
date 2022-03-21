<?php
session_start();
if(empty($_SESSION["active"])){
    header('location:index.php');
}
require('eu.php');
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
    <title>Payment</title>
</head>

<body class="body">
    <?php
    include 'navbar.php'
?>
    <?php
        include 'sidebar.php'
    ?>
    <main class="main float-end mt-4">
        <div class="article_table">
            <div class=" mb-3 mt-5 d-flex justify-content-between student__list ms-2">
                <h2 class="h1">Payment details</h2>
                <div>
                    <button class="btn btn-info text-white px-4 py-2 me-1 addStudent">Add payment</button>
                    <img src="img/Up-Down.svg" alt="up_down">
                </div>

            </div>
            <table class="table table-striped ms-4 bg-white payment__table">
                <thead>
                    <tr class="table-head">
                        <th scope="col">Name</th>
                        <th scope="col">Payment scheduel</th>
                        <th scope="col">Bill number</th>
                        <th scope="col">Amount Paid</th>
                        <th scope="col">Balance amount</th>
                        <th scope="col">Date</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>


                    <?php 
                       include('mysqli.php');
                        $payments= $mysqli->query ("SELECT * FROM  mypayments") or die($mysqli->error);
                    foreach($payments as $payment) : ?>
                    <tr>
                        <th scope="row"><?php echo $payment["name"]?></th>
                        <td><?php echo $payment["payment_scheduel"]?></td>
                        <td><?php echo $payment["bill_number"]?></td>
                        <td>DHS <?php echo $payment["amount_paid"]?></td>
                        <td>DHS <?php echo $payment["balance_amount"]?></td>
                        <td><?php echo $payment["date_paying"]?></td>
                        <td class="text-info">
                            <a href="addpayment.php?edit=<?php echo $payment['id']; ?>" class="addStudent">
                                <img src="img/Eye.svg" alt="">
                            </a>
                        </td>



                        <?php endforeach ?>


                </tbody>
            </table>
        </div>
        <div class="overlay">
            <form action="eu.php" method="POST" id="form" class=" bg-white d-flex justify-content-center container-fluid
                bg-white sign_in p-3 pt-0 w-md-75">
                <fieldset>
                    <button type="button" class="btn btn-white text-dark float-end button_x">x</button>
                    <legend class="mb-2 align-self-start">Inserez un nouveau utilisateur</legend>
                    <div class="mb-2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <label class="form-label ms-lg-3"> Name </label>
                        <input type="text" class="form-control" placeholder="name" name="name" required
                            value="<?php echo $name; ?>">
                    </div>
                    <div class="mb-1">
                        <label class="form-label ms-lg-3"> Payment scheduel </label>
                        <input type="text" class="form-control" placeholder="payment scheduel" name="payment"
                            value="<?php echo $pay; ?>" required>
                    </div>
                    <div class="mb-1">
                        <label class="form-label ms-lg-3"> Bill number </label>
                        <input type="text" max="16" class="form-control" placeholder="bill number" name="bill"
                            value="<?php echo $bill; ?>" required>
                    </div>
                    <div class="mb-1">
                        <label class="form-label ms-lg-3"> Paid amount </label>
                        <input type="text" max="16" class="form-control" placeholder="paid amount" name="paid"
                            value="<?php echo $amount; ?>" required>
                    </div>
                    <div class="mb-1">
                        <label class="form-label ms-lg-3"> Balance amount </label>
                        <input type="text" max="16" class="form-control" placeholder="balance amount" name="balance"
                            required value="<?php echo $balance; ?>">
                    </div>
                    <div class="mb-2">
                        <label class="form-label ms-lg-3"> Date of admission </label>
                        <input type="date" class="form-control" name="date" required value="<?php echo $date; ?>">
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