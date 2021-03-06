<?php
if (!isset($_SESSION)) {
    session_start();
}
$member_id = $_GET['member_id'];
error_reporting(E_ERROR || E_WARNING);
require_once'../database/connection.php';
include './Model/MemberModel.php';
$member = new Member();
$result = $member->viewMemberById($member_id);
$row = mysqli_fetch_assoc($result);
$resultClass = $member->viewClassByClassId($row['member_class_type']);

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


<!--        <script src="dist/js/jquery-1.8.3.min.js" type="text/javascript"></script>
        <script src="dist/js/jQuery-2.1.4.min.js" type="text/javascript"></script>-->
        <script src="../dist/js/UserValidate.js" type="text/javascript"></script>

        <!--<link href="dist/css/jquery-ui.css" rel="stylesheet" type="text/css"/>-->
        <!--<script src="dist/js/jquery-ui.js" type="text/javascript"></script>-->

        <!--<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
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

//            $(document).ready(function () {
//                $('#empID').change(function () {
//                    $.get('getCenterInfoAjax.php', {empId: $(this).val()}, function (data) {
//
//                        $("#centerNumber").val(data);
//                        $("#centerid").val(data);
//                    });
//                });
//            });
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
                        සාමාජිකයින් කළමනාකරණය 
                        <small>සාමාජික තොරතුරු වෙනස් කිරීම </small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="Dashboard.php"><i class="fas fa-tachometer-alt"></i> Home</a></li>

                        <li class="active">Add member</li>
                    </ol>
                </section>

                <div id="ss" class="alert-boxs  response-content " style="margin: 0px 15px 10px 15px"></div> 
                <div class="alert alert-box success " style="margin: 0px 15px 10px 15px">Successfully added record</div>
                <section class="content">

                    <form class="form-horizontal" action="Controller/MemberController.php?action=update" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box box-info">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">මූලික විස්තර </h3>
                                    </div>
                                    <div class="box-body">

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="fname">ශ්‍රේණිය  :</label>
                                            <input type="hidden" id="member_id" name="member_id" value="<?=$row['member_id']?>">
                                            <div class="col-sm-6">
                                                <select  name="member_class" id="member_class" class="form-control required" onchange="load_members();">
                                                    <option value="">-------------Plese select member-----------</option>

                                                    <option value="1" <?php
                                                    if ($row['member_class_type'] == 1) {
                                                        echo 'selected';
                                                    }
                                                    ?>>අධ්‍යක්ෂ මණ්ඩලය</option>
                                                    <option value="2" <?php
                                                    if ($row['member_class_type'] == 2) {
                                                        echo 'selected';
                                                    }
                                                    ?>>විධායක නිලධාරීන්</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="fname">නිලධාරී  මණ්ඩලය :</label>
                                            <div class="col-sm-6" id="member_typeDiv">
                                                <select  name="member_type" id="member_type" class="form-control required">
                                                    <option value="">-------------Plese select member-----------</option>
                                                    <?php while ($rows = mysqli_fetch_assoc($resultClass)) { ?>
                                                        <option value="<?php echo $rows['member_class_id'] ?>" <?php
                                                        if ($rows['member_class_id'] == $row['member_class_id']) {
                                                            echo "selected";
                                                        }
                                                        ?>><?php echo $rows['member_class_name'] ?></option> 
                                                            <?php }
                                                            ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="lname">නම   :</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control required" id="member_name" name="member_name" value="<?php echo $row['member_name'] ?>" placeholder="Enter last name">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-3" for="dob"></label>
                                            <div class="col-sm-9">
                                                <span id="msgdob"></span>
                                                <img src="Source Files/<?php echo $row['member_image']; ?>" style="width: 100px"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="dob">ෆොටෝ  :</label>
                                            <div class="col-sm-9">
                                                <span id="msgdob"></span>
                                                <input type="file" name="user_image" id="user_image" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="dob"></label>
                                            <div class="col-sm-6">
                                                <input type="submit" class="btn btn-warning" value="තොරතුරු වෙනස් කිරීම" name="AddUser"/>
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
