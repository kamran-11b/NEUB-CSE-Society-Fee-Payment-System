<?php


if (isset($_GET['admin_id'])) {
    include "./connectdb.php";
    $delete_id = $_GET['admin_id'];

    $deleteQuery = "DELETE FROM admin where admin_id=$delete_id";

    if ($connect->query($deleteQuery)) {
     
        header("Location:admin.php");
       
    } else {
        die($connect->error);
    }
}
?>

