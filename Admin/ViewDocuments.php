<?php
if (!isset($_SESSION)) {
    session_start();
}
error_reporting(E_ERROR || E_WARNING);
require_once'../database/connection.php';
include './Model/DocumentModel.php';
$document = new Document();
$result = $document->viewAllDocuments();
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

        <script src="../dist/js/jQuery-2.1.4.min.js" type="text/javascript"></script>

        <script src="../dist/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="../dist/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
        <link href="../dist/js/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>

<!--        <script src="dist/js/jquery-1.8.3.min.js" type="text/javascript"></script>
        <script src="dist/js/jQuery-2.1.4.min.js" type="text/javascript"></script>-->
        <script src="../dist/js/UserValidate.js" type="text/javascript"></script>

        <!--<link href="dist/css/jquery-ui.css" rel="stylesheet" type="text/css"/>-->
        <!--<script src="dist/js/jquery-ui.js" type="text/javascript"></script>-->

        <!--<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>

            function showUserName(str)
            {

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
                    swal("Success!", "Successfully added record....", "success !");
//                    $('.success').fadeIn(500).delay(1500).fadeOut(200);
                } else if (result == 2) {
                    swal("Success!", "Successfully deleted record", "success");
//                    $('.failure').fadeIn(500).delay(1500).fadeOut(200);
//                    $('.failure').html('Successfully deleted record');
                } else if (result == 3) {
                    swal("Success!", "Successfully Updated record", "warning");
//                    swal({
//                        title: "Updated ?",
//                        text: "Successfully deleted record!",
//                        icon: "warning",
//                        buttons: true,
//                        dangerMode: true,
//                    })
//                            .then((willDelete) => {
//                                if (willDelete) {
//                                    swal("Poof! Your imaginary file has been deleted!", {
//                                        icon: "success",
//                                    });
//                                } 
//                            });
                    //swal("Success!", "Successfully Updated record", "success");

                } else if (result == 5) {
                    swal("Error!", "Please select file", "error");
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
                        <small>සියලුම පුවත් </small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="Dashboard.php"><i class="fas fa-tachometer-alt"></i> Home</a></li>

                        <li class="active">Add member</li>
                    </ol>
                </section>

                <div id="ss" class="alert-boxs  response-content " style="margin: 0px 15px 10px 15px"></div> 
                <div class="alert alert-box success " style="margin: 0px 15px 10px 15px">Successfully added record</div>
                <section class="content">

                    <form class="form-horizontal" action="Controller/MemberController.php?action=add" method="POST" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box box-info">

                                    <div class="box-body">

                                        <table class="table table-striped" width="100%" id="customer_data">

                                            <thead>
                                                <tr>
                                                    <th>&nbsp;පින්තුරය</th>
                                                    <th>&nbsp;වර්ගය </th>
                                                    <th>&nbsp;මාතෘකාව &nbsp;</th>


                                                    <th style="width: 80px">වෙනස් කිරීමට </th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <?php while ($row = mysqli_fetch_array($result)) { ?>
                                                    <tr>
                                                        <td><img src="Source Files/<?php echo $row['document_image']; ?>" width="100px"></td>
                                                        <td><?php
                                                            $document_file = $row['document_file'];
                                                            $str = "Hello world. It's a beautiful day.";
                                                            $val = explode(".", $document_file);

                                                            if ($val[5] == "xlsx") {
                                                                ?>
                                                                <img src="../images/excelImage.png" style="width: 50px"/>   
                                                            <?php } else if ($val[5] == "docx") { ?>
                                                                <img src="../images/wordImage.png" style="width: 50px"/>   
                                                            <?php } else if ($val[5] == "pdf") { ?>
                                                                <img src="../images/pdfImage.png" style="width: 50px"/>   
                                                            <?php }
                                                            ?> 
                                                        </td>
                                                        <td><?php echo $row['document_title']; ?></td>


                                                        <td style="width: 50px">
                                                            <a href="UpdatDocuments.php?document_id=<?php echo $row['document_id']; ?>"  style="color: white">  <button type="button" class="btn btn-warning btn-sm ">
                                                                    <i class="glyphicon glyphicon-edit"></i> </button>
                                                            </a>
                                                            <a href="Controller/DocumentController.php?action=delete&document_id=<?php echo $row['document_id']; ?>"  style="color: white">  <button type="button" class="btn btn-danger btn-sm ">
                                                                    <i class="glyphicon glyphicon-trash"></i> </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </section>
            </div>
            <?php include '../includes/footer.php'; ?>
        </div>
        <!--<script src="../dist/js/jQuery-2.1.4.min.js" type="text/javascript"></script>-->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../dist/js/app.min.js"></script>
        <!--        <link href="../dist/js/datePicker/jquery-ui.css" rel="stylesheet" type="text/css"/>
                <script src="../dist/js/datePicker/jquery-ui.js"></script>-->
    </body>
    <script>
            $(document).ready(function () {
                $('#customer_data').DataTable({
                    "aLengthMenu": [[3, 5, 10, 15, 20], [3, 5, 10, 15, 20]],
                    "iDisplayLength": 10,
                    "order": [[0, "desc"]]
                });
            });
    </script> 

</html>
