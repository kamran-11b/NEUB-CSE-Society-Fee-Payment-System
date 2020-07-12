<?php
session_start();
if (isset($_SESSION["username"]) || isset($_COOKIE['username'])) {
    include './connectdb.php';
    $a_id = $_SESSION["username"];
    $adminfetchQuery = "SELECT `admin_name`FROM `admin` WHERE admin_id LIKE '$a_id'";
    $login_user = $connect->query($adminfetchQuery);
    $admin = $login_user->fetch_assoc();
    ?>
    <!DOCTYPE html>
    <html class="no-js" lang="">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

            <!-- Meta for Search Engine -->
            <meta name="keywords" content="Website,Web Design,Web Development">
            <meta name="description" content="">

            <!--******* Title ******--->
            <title>Payment || Department of CSE </title>

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
            <!--****Jquery**********-->
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script>window.jQuery || document.write('<script src="assets/js/jquery-3.2.1.min.js"><\/script>')</script>

            <script>
                $(document).ready(function () {

                    load_data();

                    function load_data(query)
                    {
                        $.ajax({
                            url: "ajax.php",
                            method: "POST",
                            data: {query: query},
                            success: function (data)
                            {
                                $('#result').html(data);
                            }
                        });
                    }
                    $('#search_text').keyup(function () {
                        var search = $(this).val();
                        if (search != '')
                        {
                            load_data(search);
                        } else
                        {
                            load_data();
                        }
                    });
                });
            </script>
        </head>
        <body>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">CSE Society</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="student.php">Students Info</a></li>
                            <li class="active"><a href="payment.php">Payment</a></li>
                            <li><a> <i class="fa fa-user-circle-o"></i><?php echo $admin["admin_name"] ?></a></li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container pt-50">
                <br />
                <h2 align="center">Search Here by Just Typing Student Id Number</h2><br />
                <div class="row">
                     <div class="col-sm-8 form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Search</span>
                        <input type="text" name="search_text" id="search_text" placeholder="Search by Students" class="form-control" />
                    </div>
                </div>
                    <div class="col-sm-4">
                        <a href="payment-details.php" class="btn btn-block btn-success">Add Payment</a>
                    </div>
                </div>
               
                <br />
                <div id="result"></div>
            </div>
           







            <!--****Jquery**********-->
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script>window.jQuery || document.write('<script src="assets/js/jquery-3.2.1.min.js"><\/script>')</script>

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