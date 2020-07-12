<?php


if (isset($_GET['st_id'])) {
    include "./connectdb.php";
    $delete_id = $_GET['st_id'];

    $deleteQuery = "DELETE FROM student where student_id=$delete_id";

    if ($connect->query($deleteQuery)) {
     
        header("Location:student.php");
       
    } else {
        die($connect->error);
    }
}
?>

