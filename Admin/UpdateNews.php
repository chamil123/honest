<?php
if (!isset($_SESSION)) {
    session_start();
}
$news_id=$_GET['news_id'];
error_reporting(E_ERROR || E_WARNING);
require_once'../database/connection.php';
include './Model/NewsModel.php';
$news = new News();
$result = $news->viewNewsbyId($news_id);
$row= mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../dist/css/VikumTA.min.css">
        <link rel="stylesheet" href="../dist/css/_all-skins.min.css">
        <link href="../dist/css/Style.css" rel="stylesheet" type="text/css"/>

        <script src="../dist/js/UserValidate.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <script src="../plugins/ckeditor/ckeditor.js"></script>
    </head>
    <body class="hold-transition skin-blue sidebar-mini" onload="load()">
        <script type="text/javascript">
            function load() {
                var result = "<?php echo $_SESSION['msgU'] ?>";

                if (result == 1) {
                    $('.success').fadeIn(500).delay(1500).fadeOut(200);
                } else if (result == 2) {
                    $('.failure').fadeIn(500).delay(1500).fadeOut(200);
                    $('.failure').html('Successfully deleted record');
                } else if (result == 3) {
                    $('.warning').fadeIn(500).delay(1500).fadeOut(200);
                    $('.warning').html('Successfully Updated record');
                }
<?php $_SESSION['msgU'] = "" ?>
            }

        </script>
        <div class="wrapper">
            <div style="height: 50px" >
                <header class="main-header effect" >
                    <a href="../../index2.html" class="logo" >
                        <span class="logo-mini" style="font-size: 12px"><b>S</b>ilver ray</span>
                        <span class="logo-lg"><b>MPCS </b></span>
                    </a>
                    <nav class="navbar navbar-static-top " role="navigation"  >
                        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" >
                            <i class="fas fa-bars"></i>
                        </a>
                        <?php include '../includes/signOut.php'; ?>
                    </nav>
                </header>
            </div>
            <?php include '../includes/navbar.php'; ?>
            <div class="content-wrapper">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        පුවත් හා සිදුවීම් 
                        <small>පුවත් වෙනස්  කිරීම </small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="Dashboard.php"><i class="fas fa-tachometer-alt"></i> Home</a></li>

                        <li class="active">Add member</li>
                    </ol>
                </section>

                <div id="ss" class="alert-boxs  response-content " style="margin: 0px 15px 10px 15px"></div> 
                <div class="alert alert-box success " style="margin: 0px 15px 10px 15px">Successfully added record</div>
                <section class="content">

                    <form class="form-horizontal" action="Controller/NewsController.php?action=update" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box box-info">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">මුලික විස්තර </h3>
                                    </div>
                                    <div class="box-body">

                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="lname">මාතෘකාව    :</label>
                                            <div class="col-sm-6">
                                                <input type="hidden" id="news_id" value="<?=$row['news_id']?>" name="news_id" >
                                                <input type="text" class="form-control required" id="news_title" value="<?=$row['news_title']?>" name="news_title" placeholder="Enter last name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="lname">පුවත පිළිබද  විස්තරය  :</label>
                                            <div class="col-sm-10">
                                                 <!--<input type="text" id="newsContent" name="newsContent" >-->
                                                <textarea class="ckeditor" name="ckeditor"><?php echo $row['news_content']?></textarea> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="dob"></label>
                                            <div class="col-sm-10">
                                                <span id="msgdob"></span>
                                                <img src="Source Files/<?php echo $row['image']; ?>" style="width:300px"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="dob">ෆොටෝ  :</label>
                                            <div class="col-sm-10">
                                                <span id="msgdob"></span>
                                                <input type="file" name="news_image" id="news_image" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="dob"></label>
                                            <div class="col-sm-10">
                                                <input type="submit" class="btn btn-warning" value="පුවත් වෙනස් කිරීමට " name="AddUser"/>
                                                <button type="reset" name="reset" class="btn btn-danger">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                    ඉවත් කිරීමට </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </form>
                </section>
            </div>
            <?php include '../includes/footer.php'; ?>
        </div>
        <script src="../dist/js/jQuery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../dist/js/app.min.js"></script>
        <!--        <link href="../dist/js/datePicker/jquery-ui.css" rel="stylesheet" type="text/css"/>
                <script src="../dist/js/datePicker/jquery-ui.js"></script>-->
    </body>

</html>
