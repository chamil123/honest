<?php
if (!isset($_SESSION)) {
    session_start();
}
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
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="../js/editor.js"></script>
        <script>
            $(document).ready(function () {
                $("#newsContent").Editor();
            });
        </script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="../css/editor.css" type="text/css" rel="stylesheet"/>
        <title>LineControl | v1.1.0</title>-->



    </head>
    <body class="hold-transition skin-blue sidebar-mini" onload="load()">
        <script type="text/javascript">
            function load() {
                var result = "<?php echo $_SESSION['msgU'] ?>";

                if (result == 1) {
                     swal("Success!", "Successfully Added record", "success");
                    $('.success').fadeIn(500).delay(1500).fadeOut(200);
                } else if (result == 2) {
                     swal("Success!", "Successfully deleted record", "success");
                    $('.failure').fadeIn(500).delay(1500).fadeOut(200);
                    $('.failure').html('Successfully deleted record');
                } else if (result == 3) {
                     swal("Success!", "Successfully Updated record", "warning");
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
                        <small>පුවත් ඇතුලත් කිරීම </small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="Dashboard.php"><i class="fas fa-tachometer-alt"></i> Home</a></li>

                        <li class="active">Add member</li>
                    </ol>
                </section>

<!--                <div id="ss" class="alert-boxs  response-content " style="margin: 0px 15px 10px 15px"></div> 
                <div class="alert alert-box success " style="margin: 0px 15px 10px 15px">Successfully added record</div>-->
                <section class="content">

                    <form class="form-horizontal" action="Controller/NewsController.php?action=add" method="POST" enctype="multipart/form-data">
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
                                                <input type="text" class="form-control required" id="news_title" name="news_title" placeholder="Enter last name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="lname">පුවත පිළිබද  විස්තරය  :</label>
                                            <div class="col-sm-10">
                                                 <!--<input type="text" id="newsContent" name="newsContent" >-->
                                                <textarea class="ckeditor" name="ckeditor"></textarea> 
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
                                                <input type="submit" class="btn btn-success" value="පුවත් ඇතුලත් කිරීම " name="AddUser"/>
                                                <button type="reset" name="reset" class="btn btn-danger">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                    ඉවත් කිරීමට</button>
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
