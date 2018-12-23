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
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            $(function () {
                $("#dob").datepicker({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: 'yy-mm-dd',
                    yearRange: "-55:-16"
                });

            });

        </script>
        <script>
            function load_members() {
                $('#rep_div').load("load_area_rep.php", {'dis_id': $('#dis_id').val(), 'ar_id': ''});
                $('#member_typeDiv').load("load_member.php", {'member_class': $('#member_class').val()});

            }
            function showUserName(str)
            {
                // alert("sasas");
                var xmlhttp;
                if (str == "")
                {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                }
                // xmlhttp.open("GET", "getUserName.php?q=" + str, true);
                xmlhttp.open("GET", "getUserName.php?uname=" + str, true);
                xmlhttp.send();
            }

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah')
                                .attr('src', e.target.result)
                                .height(200)
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>

    </head>
    <body class="hold-transition skin-blue sidebar-mini" onload="load()">
        <script type="text/javascript">

            function load() {


                var result = "<?php echo $_SESSION['msgU'] ?>";


                if (result == 1) {
                    swal("Success!", "Successfully Added record", "success");
//                  $('.success').fadeIn(500).delay(1500).fadeOut(200);
                } else if (result == 2) {
                    swal("Success!", "Successfully Deleted record", "success");
//                    $('.failure').fadeIn(500).delay(1500).fadeOut(200);
//                    $('.failure').html('Successfully deleted record');
                } else if (result == 3) {
                    swal("Success!", "Successfully Updated record", "warning");
//                    $('.warning').fadeIn(500).delay(1500).fadeOut(200);
//                    $('.warning').html('Successfully Updated record');
                } else if (result == 5) {
                    swal("Error!", "Please select document", "error");
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
                        ලිපිගොනු  කළමනාකරණය 
                        <small>ලිපිගොනු  ඇතුලත් කිරීම  </small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="Dashboard.php"><i class="fas fa-tachometer-alt"></i> Home</a></li>

                        <li class="active">Add member</li>
                    </ol>
                </section>

                <div id="ss" class="alert-boxs  response-content " style="margin: 0px 15px 10px 15px"></div> 
                <div class="alert alert-box success " style="margin: 0px 15px 10px 15px">Successfully added record</div>
                <section class="content">

                    <form class="form-horizontal" action="Controller/DocumentController.php?action=add" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box box-info">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">මූලික විස්තර </h3>
                                    </div>
                                    <div class="box-body">

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="dob">ෆොටෝ  :</label>
                                            <div class="col-sm-9">
                                                <span id="msgdob"></span>
                                                <input type="file" name="document_image" id="document_image" onchange="readURL(this);"/>
                                                <img id="blah" src="../images/articles.png" alt="your image" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="lname">මාතෘකාව    :</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control required" id="document_title" name="document_title" placeholder="Enter last name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="dob">ලිපිගොණු   :</label>
                                            <div class="col-sm-9">
                                                <span id="msgdob"></span>
                                                <input type="file" name="document_file" id="document_file" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="dob"></label>
                                            <div class="col-sm-6">
                                                <input type="submit" class="btn btn-success" value="ලිපිගොනු  ඇතුලත් කිරීම"  name="AddUser"/>
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
        <link href="../dist/js/datePicker/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script src="../dist/js/datePicker/jquery-ui.js"></script>
        
       
    </body>

</html>
