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

        $update_id = $_GET["admin_id"];
        //Fetch Data from DB
        $fetchQuery = "SELECT * FROM `admin` where admin_id='$update_id'";
        $db_result = $connect->query($fetchQuery);


        if (isset($_POST["update"])) {
            $id = $_POST["id"];
            $names = $_POST["names"];
            $email = $_POST["email"];
            $mobile = $_POST["mobile"];
            $pw = $_POST["password"];

            $updateQuery = "UPDATE admin SET admin_id='$id',admin_name='$names',admin_email='$email',admin_mobile='$mobile',admin_password='$$pw' WHERE admin_id='$update_id'";
            if ($connect->query($updateQuery) == TRUE) {

                header("Location:admin.php");
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
                        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
                            <input type="text" class="form-control form-group" name="id" value="<?php echo $row['admin_id'] ?>" placeholder="Enter Admin ID No..." readonly/>
                            <input type="text" class="form-control form-group" name="names" value="<?php echo $row['admin_name'] ?>"  placeholder="Enter Admin Full Name.." required/>
                            <input type="text" class="form-control form-group" name="email" value="<?php echo $row['admin_email'] ?>" placeholder="Enter Email Address..." required/>
                            <input type="text" class="form-control form-group" name="mobile"  value="<?php echo $row['admin_mobile'] ?>" placeholder="Enter Mobile Number.."/>
                            <input type="password" class="form-control form-group" name="password" value="<?php echo $row['admin_password'] ?>"  placeholder="Enter Password"/>
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
