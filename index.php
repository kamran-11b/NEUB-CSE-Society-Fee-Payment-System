<?php
session_start();
include "./connectdb.php";
if (isset($_SESSION["username"]) || isset($_COOKIE['username'])) {
    
    $a_id=$_SESSION["username"];
    $adminfetchQuery = "SELECT `admin_name`FROM `admin` WHERE admin_id LIKE '$a_id'";
    $login_user = $connect->query($adminfetchQuery);
    $admin = $login_user->fetch_assoc();
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

            <!-- Meta for Search Engine -->
            <meta name="keywords" content="">
            <meta name="description" content="">

            <!--******* Title ******--->
            <title>Home || NEUB CSE Society </title>

            <!--***** Favicons ******-->
            <link rel="icon" type="image/x-icon" href="assets/images/html5logo.png">

            <!--***Font-Awesome Icon CSS*****-->
            <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

            <!--****** BootStrap CSS **********-->
            <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

            <!--*****Owl-Carousel Required CSS****-->
            <link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css"/>
            <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>

            <!--*****Nivo Slider CSS****-->
            <link href="assets/nivo/default/default.css" rel="stylesheet" type="text/css"/>
            <link href="assets/nivo/nivo-slider.css" rel="stylesheet" type="text/css"/>

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
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="student.php">Students Info</a></li>
                            <li><a href="payment.php">Payment</a></li>
                            <li><a> <i class="fa fa-user-circle-o"></i> <?php echo $admin['admin_name'] ?></a></li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid pt-50">
                <div class="row">
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            <img src="assets/images/techhunt-2017.JPG" data-thumb="assets/images/slide (1).jpeg" alt="Slider images" title="TechHunt-2018"/>
                            <img src="assets/images/techhunt-2017_2.jpg" data-thumb="assets/images/slide (1).jpeg" alt="Slider images" title="TechHunt-2018"/>
                        </div>
                    </div>
                </div>
            </div>


            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="about-us form-group">
                            <h2 class="text-center">ABOUT US</h2>
                            <p>CSE Society is a non-political departmental organization. In North East University Bangladesh, CSE society is the largest
                                organization consists of all students and teachers of CSE department. The objective of the CSE Society is to promote Computer Science & Engineering awareness among the students in the CSE by organizing technical activities such as lectures, workshop, quizzes and excursion and to foster relationship among the past and present students and the teachers of the CSE by
                                organizing various departmental events such as annual day celebration, fresher's welcome, farewell etc.</p>
                            <hr>
                        </div>

                    </div>
                </div>
            </section>

            <section id="committee">
                <div class="container">
                    <div class="row">
                        <div class="title">
                            <h2 class="text-center">Executive Committee</h2>
                            <p>CSE Society is run by an executive committee where the Head of the Department of CSE is the President of the society by constitution.
                                A treasurer is also appointed by the President among the teachers of the Department. Rest of the executive members of the society are
                                formed by conduction election among students.</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <div>
                                    <img src="assets/images/AhsanHabib.JPG" class="img-responsive img-circle mx-auto" alt="Ahsan Habib"/>
                                </div>
                                <div class="caption text-center">
                                    <h3>Ahsan Habib</h3>
                                    <h4 class="text-danger">President</h4>
                                    <ul class="list-unstyled list-inline social">
                                        <li><a href="https://www.facebook.com/ahferoz11" target="_blank"><i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="mailto:ahsan@gmail.com"><i class="fa fa-envelope"></i> </a></li>
                                        <li><a href="#"><i class="fa fa-mobile-phone"></i> </a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <div>
                                    <img src="assets/images/AlMehdiSaadatChowdhury.jpg" class="img-responsive img-circle mx-auto" alt="Al Mehdi Saadat Chowdhury"/>
                                </div>
                                <div class="caption text-center">
                                    <h3>Al Mehdi Saadat Chowdhury</h3>
                                    <h4 class="text-warning">Treasurer</h4>
                                    <ul class="list-unstyled list-inline social">
                                        <li><a href="https://www.facebook.com/ahferoz11" target="_blank"><i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="mailto:ahsan@gmail.com"><i class="fa fa-envelope"></i> </a></li>
                                        <li><a href="#"><i class="fa fa-mobile-phone"></i> </a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <div>
                                    <img src="assets/images/Mir_Lutfur_Rahman.jpg" class="img-responsive img-circle mx-auto" alt="Mir Lutfur Rahman"/>
                                </div>
                                <div class="caption text-center">
                                    <h3>Mir Lutfur Rahman</h3>
                                    <h4 class="text-danger">Vice President</h4>
                                    <ul class="list-unstyled list-inline social">
                                        <li><a href="https://www.facebook.com/ahferoz11" target="_blank"><i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="mailto:ahsan@gmail.com"><i class="fa fa-envelope"></i> </a></li>
                                        <li><a href="#"><i class="fa fa-mobile-phone"></i> </a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 section" id="multiple">
                            <h2 class="text-center text-primary">Executive Members:</h2>
                            <div class="owl-carousel owl-theme">
                                <div class="thumbnail">
                                    <div>
                                        <img src="assets/images/shameem.jpg" class="img-responsive mx-auto" alt="Fakhqr Uddin Shameem"/>
                                    </div>
                                    <div class="caption text-center">
                                        <h5>Fakhqr Uddin Shameem</h5>
                                        <h5 class="text-danger">General Secretary</h5>
                                        <ul class="list-unstyled list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                                 <div class="thumbnail">
                                    <div>
                                        <img src="assets/images/bilasi.png" class="img-responsive mx-auto" alt="Bilasi Deb Nath"/>
                                    </div>
                                    <div class="caption text-center">
                                        <h5>Bilasi Deb Nath</h5>
                                        <h5 class="text-danger">Assistant Genaral Secretary</h5>
                                        <ul class="list-unstyled list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                 <div class="thumbnail">
                                    <div>
                                        <img src="assets/images/asfq.jpg" class="img-responsive mx-auto" alt="Ashfaque Ahmed"/>
                                    </div>
                                    <div class="caption text-center">
                                        <h5>Ashfaque Ahmed</h5>
                                        <h5 class="text-danger">Executive Members</h5>
                                        <ul class="list-unstyled list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                  <div class="thumbnail">
                                    <div>
                                        <img src="assets/images/nabil.jpg" class="img-responsive mx-auto" alt="Farhan Nabil"/>
                                    </div>
                                    <div class="caption text-center">
                                        <h5>Farhan Nabil</h5>
                                        <h5 class="text-danger">Executive Members</h5>
                                        <ul class="list-unstyled list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                 <div class="thumbnail">
                                    <div>
                                        <img src="assets/images/jafrul.jpg" class="img-responsive mx-auto" alt="Syed Jafrul Husen"/>
                                    </div>
                                    <div class="caption text-center">
                                        <h5>Syed Jafrul Husen</h5>
                                        <h5 class="text-danger">Executive Members</h5>
                                        <ul class="list-unstyled list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                     
                                </div>
                            </div>
                        </div> 
                   
                    </div>
                </div>
            </section>


            <footer id="contact">
                <div class="container">
                    <div class="row">
                        <div class="title">
                            <h2 class="text-center text-info">Contact Us</h2>
                        </div>
                        <div class="col-md-offset-2 col-md-8">
                            <form action="sendmail.php" method="POST">
                                <div class="col-md-6 col-xsm-6 form-group">
                                    <input type="email" name="email" class="form-control" placeholder=" Your Email Address" required>
                                </div>
                                <div class="col-md-6 col-xsm-6 form-group">
                                    <input type="text" name="subject" class="form-control" placeholder=" Subject" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea rows="8" name="comment"  class="form-control" placeholder="Your Messsage" required></textarea>
                                </div>
                                <div class="col-md-3 col-md-offset-9 col-xsm-3">
                                    <div class="form-group">
                                        <button type="submit" name="contact" class="form-control btn-primary">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </footer>
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Developed By Azhar , Akram & Kamran</p>
                        </div>
                        <div class="col-md-6">
                             <ul class="list-unstyled list-inline social text-right">
                                            <li>Follow us on Facebook <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li
                         </ul>
                        </div>
                    </div>
                </div>
            </footer>



            <!--****Jquery**********-->
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script>window.jQuery || document.write('<script src="assets/js/jquery-3.2.1.min.js"><\/script>')</script>

            <script src="assets/js/jquery.nivo.slider.js" type="text/javascript"></script>
            <!--**************Owl-Carousel JS*********-->
            <script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
            <!--***Bootstrap Js******-->
            <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>


            <!-- Custom JS --->
            <script src="assets/js/main.js" type="text/javascript"></script>
            <script src="assets/js/plugins.js" type="text/javascript"></script>
        </body>
    </html>

    <?php
} else {
    header("location:login.php");
}
?>
