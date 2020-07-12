<?php
session_start();
if (isset($_SESSION["username"]) || isset($_COOKIE['username'])) {
    include "./connectdb.php";
    
    $a_id = $_SESSION["username"];
    $adminfetchQuery = "SELECT `admin_name`FROM `admin` WHERE admin_id LIKE '$a_id'";
    $login_user = $connect->query($adminfetchQuery);
    $admin = $login_user->fetch_assoc();

    $result = NULL;
    $result_data = NULL;
    if (isset($_POST["submit"])) {
        $id = $_POST["id"];
        $names = $_POST["names"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $pw = $_POST["password"];


        $insertQuery = "INSERT INTO `admin`(`admin_id`, `admin_name`,`admin_email`,`admin_mobile`,`admin_password`) VALUES ('$id','$names','$email','$mobile','$pw')";
        if ($connect->query($insertQuery) == TRUE) {

            header("Location:admin.php");
//            $result = "Add Student Successfully";
        } else {
            die($connect->error);
        }
    }

//Fetch Data from DB
    $fetchQuery = "SELECT * FROM `admin`";
    $db_result = $connect->query($fetchQuery);
    ?>

    <!DOCTYPE html>
    <html class="no-js" lang="">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie = edge">
            <meta name="viewport" content="width = device-width, initial-scale = 1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

            <!-- Meta for Search Engine -->
            <meta name="keywords" content="Website, Web Design, Web Development">
            <meta name="description" content="">

            <!--******* Title ******--->
            <title>Admin Panel </title>

            <!--***** Favicons ******-->
            <link rel="icon" type="image/x-icon" href="assets/images/html5logo.png">

            <!--***Font-Awesome Icon CSS*****-->
            <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

            <!--****** BootStrap CSS **********-->
            <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

            <!--*****Google Font****-->

            <!--*****HTML5 Boilerplate CSS******-->
            <link rel="stylesheet" href="assets/css/normalize.css">
            <link rel="stylesheet" href="assets/css/main.css">

            <!--*********Customize CSS***********-->
            <link rel="stylesheet" type="text/css" href="assets/css/style.css">
            <link rel="stylesheet" type="text/css" href="assets/css/media.css"/>

            <!--******HTML5shiv Js****************-->
            <script src="assets/js/modernizr-3.5.0.min.js"></script>
        </head>
        <body>
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class = "icon-bar"></span>
                            <span class = "icon-bar"></span>
                            <span class = "icon-bar"></span>
                        </button>
                        <a class = "navbar-brand" href = "#">CSE Society</a>
                    </div>
                    <div class = "collapse navbar-collapse" id = "myNavbar">
                        <ul class = "nav navbar-nav navbar-right">
                            <li><a href = "index.php">Home</a></li>
                            <li><a href = "student.php">Students Info</a></li>
                            <li><a href = "payment.php">Payment</a></li>
                            <li class = "active"><a href = "admin.php">Admin Panel</a></li>

                            <li><a> <i class = "fa fa-user-circle-o"></i> <?php echo $admin['admin_name']
    ?></a></li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container">
                <div class="row">
                    <h1>Admin</h1>
                    <div class="table-responsive">

                        <?php
                        if ($db_result->num_rows > 0) {
                            ?>
                            <table class="table table-bordered">
                                <tr>
                                    <th>SL</th>
                                    <th>Admin ID</th>
                                    <th>Admin Name</th>
                                    <th>Ema<il</th>
                                    <th>Mobile</th>
                                    <th>Password</th>  
                                    <th>Action</th>
                                    </tr>
                                    <?php
                                    $i = 1;
                                    while ($row = $db_result->fetch_assoc()) {
                                        ?>

                                        <tr>
                                            <td> <?php echo $i ?> </td>
                                            <td> <?php echo $row['admin_id'] ?> </td>
                                            <td> <?php echo $row['admin_name'] ?> </td>
                                            <td> <?php echo $row['admin_email'] ?> </td>
                                            <td> <?php echo $row['admin_mobile'] ?> </td>
                                            <td> <?php echo $row['admin_password'] ?> </td>
                                            <td><a href="edit-admin.php?admin_id=<?php echo $row['admin_id']; ?>" class="btn btn-success">Edit</a> <a href="delete-admin.php?admin_id=<?php echo $row['admin_id']; ?>" class="btn btn-danger">Delete</a></td>
                                        </tr>

                                        <?php
                                        $i++;
                                    }
                                    ?>
                            </table>
                            <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="row">

                    <button type="button" class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#myModal">Add Student Information</button>
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Add New Admin</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row form-group">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
                                                <input type="text" class="form-control form-group" name="id" placeholder="Enter Admin ID No..." required/>
                                                <input type="text" class="form-control form-group" name="names"  placeholder="Enter Admin Full Name.." required/>
                                                <input type="text" class="form-control form-group" name="email" placeholder="Enter Email Address..." required/>
                                                <input type="text" class="form-control form-group" name="mobile"  placeholder="Enter Mobile Number.."/>
                                                <input type="password" class="form-control form-group" name="password"  placeholder="Enter Password"/>
                                                <input type="submit" name="submit"  class="form-control btn-primary form-group" value="Submit">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <!--****Jquery**********-->
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script>window.jQuery || document.write('<script src="assets/js/jquery-3.2.1.min.js"><\/script>')</script>
            <script>
                function myFunction() {
                    alert("Hello");
    //                    var element = document.getElementById("confirmation");
    //                    element.classList.remove("hidden");
                }
            </script>
            <!--***Bootstrap Js******-->
            <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

            <!-- Custom JS --->
            <script src="assets/js/main.js" type="text/javascript"></script>
            <script src="assets/js/plugins.js" type="text/javascript"></script>

            <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
            <script>
                window.ga = function () {
                    ga.q.push(arguments)
                };
                ga.q = [];
                ga.l = +new Date;
                ga('create', 'UA-XXXXX-Y', 'auto');
                ga('send', 'pageview')
            </script>
            <script src="https://www.google-analytics.com/analytics.js" async defer></script>
        </body>
    </html>
    <?php
} else {
    header("location:login.php");
}
?>
