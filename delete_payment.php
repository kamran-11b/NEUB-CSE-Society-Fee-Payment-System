<?php


if (isset($_GET['payment_id'])) {
    include "./connectdb.php";
    $delete_id = $_GET['payment_id'];
    $deleteQuery = "DELETE FROM payment where p_id=$delete_id";

    if ($connect->query($deleteQuery)) {
     
        header("Location:payment-details.php");
       
    } else {
        die($connect->error);
    }
}
?>

