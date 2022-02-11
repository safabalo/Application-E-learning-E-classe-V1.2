<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="js/bootstrap.bundle.min.js" defer></script>
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
        <article class="article_table">
            <div class=" mb-3 mt-5 d-flex justify-content-between student__list ms-2">
                <h2 class="h1">Payment details</h2>
                <div>
                    <a href="addpayment.php" class="btn btn-info text-white px-4 py-2 me-1">Add payment</a>
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
                      $mysqli = new mysqli('localhost', 'root', '', 'studentdb') or die (mysqli_error($mysqli));
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
                    <a href="addpayment.php?edit=<?php echo $payment['id']; ?>">
                        <img src="img/Eye.svg" alt="">
                        </a>
                    </td>
                   
                  
                    
                  <?php endforeach ?>
                 
                  
                </tbody>
              </table>
            </article>
    </main>
</body>
</html>