<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Update Student's information</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <?php
        include './connectDB.php';

        $update_payment = $_GET["payment_id"];
        //Fetch Data from DB
        $paymentfetchQuery = "SELECT * FROM `payment` where p_id=$update_payment";
        $payment = $connect->query($paymentfetchQuery);

        if (isset($_POST["updatePayment"])) {
            $std_id= $_POST["std_id"];
            $sem_no = $_POST["sem_no"];
            $amount = $_POST["amount"];
            $updatePaymentQuery = "UPDATE payment SET semester_no='$sem_no',amount='$amount' WHERE p_id=$update_payment";
            if ($connect->query($updatePaymentQuery) == TRUE) {

                header("Location:payment-details.php");
            } else {
                die($connect->error);
            }
        }

        ?>
        <div class="container">

            <div class="row">
                <div class="col-sm-offset-3 col-sm-6 ">
                    <h1 class="form-group">Update Student's information</h1>

                    <?php
                    while ($pay = $payment->fetch_assoc()) {
                        ?>

                        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST" class="jumbotron" > 
                            <input type="text" class="form-control form-group" name="std_id" value="<?php echo $pay['student_Id'] ?>" readonly/>
                            <input type="text" class="form-control form-group" name="sem_no" value="<?php echo $pay['semester_no'] ?>"/>
                            <input type="text" class="form-control form-group" name="amount" value="<?php echo $pay['amount'] ?>"/>
                            <input type="submit" name="updatePayment"  class="form-control btn-primary form-group" value="Update">
                        </form>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </body>
</html>
