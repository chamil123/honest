<!DOCTYPE html>
<?php
// Report runtime warnings
error_reporting(E_ERROR || E_WARNING);
//require './database/connection.php';
//include './Module/model/BranchModel.php';
//$branch = new Branch();
//$result = $branch->viewAllBranches();
//
//header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
//header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
//header("Cache-Control: post-check=0, pre-check=0", false);
//header("Pragma: no-cache");
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/social_button.css">

        <link rel="stylesheet" href="../js/style.css">
        <!--<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">-->
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
        <style>
            body{
                background-image: url(../images/4ea82f9ca6b209eb54291cb26e98387e.jpg);
                background-size: cover;
                /*                overflow: hidden;
                                width: 1366px;*/

            }

            .login-logo p{
                color:#666666;
                font-size: 35px;
                padding-top: 30px;
                padding-bottom: 10px;
                font-family: "Raleway Light", Georgia, Serif;
            }.login-card {
                padding: 30px;
                width: 384px;
                background-color: #ffffff;
                /*#F7F7F7;*/
                margin: 0 auto 10px;
                border-radius: 2px;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                overflow: hidden;
            }
        </style>
    </head>
    <body>
        <div >
            <div class="demo">
                <div class="login">
                    <center>
                        <p style="padding-top: 20px;font-size: 3.3em;color: #ffffff;font-family: 'Quicksand', sans-serif;">login to your account</p>
                        <p style="padding-top: 0px">
                            <img style="width:150px" src="../images/coop_logo.png">
                        </p>
                    </center>
                    <form action="Controller/LoginController.php" method="post">
                        <div class="login__form">
                            <div  style="margin-bottom: 20px;margin-top: -20px">
                                <?php
                                $msg = "";
                                $msg = $_GET['msg'];

                                if ($msg != "") {
                                    ?>
                                    <span style="font-size: 15px;color: white"><?= $msg ?></span>
                                    <?php
                                    $msg = "";
                                }
                                ?>
                                <div class="login__row">
                                    <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                                    <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                                    </svg>
                                    <input type="text" class="login__input name" name="Username" placeholder="Username" autocomplete="off" value=""/>
                                </div>
                                <div class="login__row">
                                    <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                                    <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                                    </svg>
                                    <input type="password" class="login__input pass" name="Password" placeholder="Password" value=""  autocomplete="off"/>
                                </div>
                                <input type="submit" class=" btn btn-info login__submit" style="margin-top: 30px" >Sign in
                                <p class="login__signup" style="margin-top: -15px">Don't have an account? &nbsp;<a>Sign up</a></p>-->
                            </div>

                    </form>

                </div>
            </div>
        </div>
        <script src="../dist/js/jQuery-2.1.4.min.js" type="text/javascript"></script>
        <!--<script src="bootstrap/js/index.js"></script>-->
    </body>
</html>
