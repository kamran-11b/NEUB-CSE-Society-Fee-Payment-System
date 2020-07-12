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

        $update_id = $_GET["st_id"];
        //Fetch Data from DB
        $fetchQuery = "SELECT * FROM `student` where student_id='$update_id'";
        $db_result = $connect->query($fetchQuery);


        if (isset($_POST["update"])) {
            $id = $_POST["id"];
            $names = $_POST["names"];
            $session = $_POST["session"];
            $section = $_POST["section"];
            $mobile = $_POST["mobile"];
            $blood = $_POST["blood"];

            $updateQuery = "UPDATE student SET student_id='$id',student_name='$names',student_session='$session',student_section='$section',student_mobile='$mobile',student_blood='$blood' WHERE student_id='$update_id'";
            if ($connect->query($updateQuery) == TRUE) {

                header("Location:student.php");
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
                    while ($row = $db_result->fetch_assoc()) {
                        ?>

                    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST" class="jumbotron" > 
                            <input type="text" class="form-control form-group" name="id"  value="<?php echo $row['student_id'] ?>"/>
                            <input type="text" class="form-control form-group" name="names" value="<?php echo $row['student_name'] ?>"/>
                            <input type="text" class="form-control form-group" name="session" value="<?php echo $row['student_session'] ?>"/>
                            <input type="text" class="form-control form-group" name="section" value="<?php echo $row['student_section'] ?>" />
                            <input type="tel"  class="form-control form-group" name="mobile" value="<?php echo $row['student_mobile'] ?>" />
                            <input type="text"class="form-control form-group" name="blood"  value="<?php echo $row['student_blood'] ?>"/>
                            <input type="submit" name="update"  class="form-control btn-primary form-group" value="Update">
                        </form>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </body>
</html>
