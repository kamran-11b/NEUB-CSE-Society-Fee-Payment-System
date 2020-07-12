<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Log in to CSE Society</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <style>
            body{
                background: url("assets/images/bg-.jpeg") no-repeat;
                min-height: 100vh;

            }
            .jumbotron{
                position:relative;
                top:100px;
                background: #E0E0E0;
            }
            .jumbotron h1{
                font-size: 30px;
                color: #2C436F;
            }
            .jumbotron p{
                font-size: 16px;
                color: darkred;
                font-weight: bold;
            }
            .jumbotron .btn{
                background: #1F5FA2;
                border-color: #1F5FA2;
                color: #FFF;
                font-weight: bold;
                font-size: 15px;

            }
        </style>
    </head>
    <body>

        <?php
        session_start();
        $invalid = NULL;
        if (isset($_POST["login"])) {
            include_once "./connectdb.php";

            $username = $_POST["username"];
            $pw = $_POST["password"];
            $remember = isset($_POST["remember"]) == TRUE ? 1 : 0;

            $loginQuery = "SELECT * FROM admin where admin_id='$username' AND admin_password='$pw'";
            $result = $connect->query($loginQuery);
            if ($result->num_rows > 0) {
                $_SESSION["username"] = $username;
                if ($remember == 1) {
                    setcookie('username', $username, time() + 3600 * 24 * 14, '/');
                }
            } else {

                $invalid = "* Incorrect Username/Password! Please type correct";
            }
        }

        if (isset($_SESSION["username"]) || isset($_COOKIE['username'])) {
            if ($username == "0001" && $pw == "admin") {
                header("Location:admin.php");
            } else if ($result->num_rows > 0) {
                header("Location:index.php");
            }
        }
        ?>

        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="jumbotron">
                        <h1 class="text-center form-group">Login in to CSE Society</h1>
                        <form  method="POST">
                            <input type="text" name="username" placeholder="Enter your Username" class="form-control form-group" required>
                            <input type="password" name="password" placeholder="Enter your Password" class="form-control form-group" required>
                            <div class="checkbox">
                                <label for="remember"><input type="checkbox" name="remember" id="remember">Remember me</label>
                            </div>
                            <input type="submit" name="login" class="btn btn-block" value="LOGIN">
                        </form>
                        <br>
                        <p class="text-danger"><?php echo $invalid ?></p>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>

    </body>
</html>
