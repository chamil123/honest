<?php
if (!isset($_SESSION)) {
    session_start();
}
error_reporting(E_ERROR || E_WARNING);
require_once'./database/connection.php';
include './Admin/Model/DocumentModel.php';
include './Admin/Model/NewsModel.php';


$news = new News();
$document = new Document();
$resultNews = $news->viewNews();

$reultDoc = $document->viewAllDocuments();

//while ($row = mysqli_fetch_array($reultClass)) {
//    //if ($row['member_class_id'] == 10) {
//    echo '' .$row['member_class_id']." - ".$row['member_class_name'] . "<br/>";
//    // }
//}
//var_dump($result);
//if ($row['member_class_name'] == "ලේකම්") {
//    echo 'sfsdfsdfsdfsdfsdfsdfs';
//}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>පොල්පිතිගම විවිද සේවා සමුපකාර සමිතිය</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
        <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
        <meta name="author" content="GetTemplates.co" />
        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <!-- Animate.css -->
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/animate.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="css/icomoon.css">
        <!-- Themify Icons-->
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- Bootstrap  -->
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="css/magnific-popup.css">

        <!-- Owl Carousel  -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <!-- Theme style  -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="sliderengine/jquery.hislider.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
        <link href="css/site.css" rel="stylesheet" type="text/css" />
        <script src="scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
        <style>
            #hislider1{
                height:100%; 
                margin-top: 0px;
                padding: 0px;

            }.active{
                background-color: #0051FF;
            }.center-block {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }.box_heading_icon{
                text-align: center;
                font-size: 2.5em;
                color: #ffffff;
            }
            .box_heading{
                font-size: 1.2em;
                text-align: center;
                color: #ffffff;
            }
            .box_content{
                font-size: 1em;
                text-align: center;

            } .user-image {
                width: 110px;
                border-radius: 50%;
                border: 5px solid #ffffff;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }.searchform div {
                height: 26px;
                width: 193px;
            }
            .searchboxwrapper {
                position: relative;
            }
            .searchbox {
                border: 1px solid #dadada;
                outline: none;
                font: 11px 'Montserrat', sans-serif;
                color: #777;
                width: 182px;
                height: 26px;
                background: #fff;
                padding-left: 10px;
            }
            .searchsubmit {
                font-family: 'FontAwesome';
                width: 29px;
                height: 29px;
                border: 1px solid #dadada;
                font-size: 12px;
                position: absolute;
                top: 0;
                right: 0;
                background: #dadada;
                border: none;
                color: #5d3250;
                cursor: hand; cursor: pointer;
            }/* Style the Image Used to Trigger the Modal */
            #myImg {
                border-radius: 5px;
                cursor: pointer;
                transition: 0.3s;
            }

            #myImg:hover {opacity: 0.7;}

            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
            }

            /* Modal Content (Image) */
            .modal-content {
                margin: auto;
                display: block;
                width: 80%;
                max-width: 700px;
            }

            /* Caption of Modal Image (Image Text) - Same Width as the Image */
            #caption {
                margin: auto;
                display: block;
                width: 80%;
                max-width: 700px;
                text-align: center;
                color: #ccc;
                padding: 10px 0;
                height: 150px;
            }

            /* Add Animation - Zoom in the Modal */
            .modal-content, #caption { 
                animation-name: zoom;
                animation-duration: 0.6s;
            }

            @keyframes zoom {
                from {transform:scale(0)} 
                to {transform:scale(1)}
            }

            /* The Close Button */
            .close {
                position: absolute;
                top: 15px;
                right: 35px;
                color: #f1f1f1;
                font-size: 40px;
                font-weight: bold;
                transition: 0.3s;
            }

            .close:hover,
            .close:focus {
                color: #bbb;
                text-decoration: none;
                cursor: pointer;
            }

            /* 100% Image Width on Smaller Screens */
            @media only screen and (max-width: 700px){
                .modal-content {
                    width: 100%;
                }
            }

        </style> 

    </head>
    <body>
        <script>
            {
                $(".class-span").each(function (i) {
                    var len = $(this).text().trim().length;
                    if (len > 100)
                    {
                        $(this).text($(this).text().substr(0, 100) + '...');
                    }
                });
            }
            );


        </script>


        <div class="gtco-loader"></div>
        <div id="page">
            <div class="page-inner">
                <div id="head-top" style="position: absolute; width: 100%; top: 0; ">
                    <!--                    <div class="gtco-top">
                                            <div class="gtco-container">
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-6">
                                                        <div id="gtco-logo"><a href="index.html">Honest <em>.</em></a></div>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 social-icons">
                    
                                                    </div>
                                                </div>
                                            </div>	
                                        </div>-->
                    <nav class="gtco-nav sticky-banner" role="navigation" style="height: 46px;padding: 0px">
                        <div class="gtco-container">
                            <div style="height: 90px;background-color: #FFF; background: rgba(255,255,255,0.85); ">
                                <div class="col-md-1" style="padding-left: 15px;padding-top: 4px">
                                    <img src="images/governmentLogo.png" width="51px"/>
                                </div>
                                <div class="col-md-7" style=";margin: 0px; ">
                                    <img src="images/polpithigama2.png" />
                                </div>
                                <div class="col-md-1" style=";margin: 0px;padding-top: 5px;padding-left: 0px">
                                    <img src="images/Cooperative-logo.gif" width="75px" />
                                </div>
                                <div class="col-md-3" style="padding-top: 15px">

                                    <img src="images/ta-download.jpg" class="pull-right"/>
                                    <form style="margin-left: -18px;margin-top: -4px" role="search" method="get" id="searchform" class="searchform" action="#" _lpchecked="1">
                                        <div class="searchboxwrapper" >
                                            <input class="searchbox" type="text" value="" name="s" placeholder="Search for" id="s">
                                            <input class="searchsubmit" type="submit" id="searchsubmit" value="">
                                        </div>
                                    </form>
                                </div>
                                <div class="row" >
                                    <a href="Admin/index.php" style="color: #777;font-size: 28px;"><i class="far fa-user-circle"></i><span style="font-size: 14px"> Staff portal</span></a>
                                </div>
                            </div>
                            <div>
                                <div id='cssmenu'>
                                    <ul>
                                        <li class='active'><a   href='index.php'>මුල්</a></li>
                                        <li ><a href='intro.php'>අප</a>
                                            <ul>
                                                <li><a href='intro.php'>හැදින්වීම</a>
                                                </li>
                                                <li><a href='directors.php'>අධ්‍යක්ෂක</a>
                                                </li>
                                                <li><a href='directors.php'>විධායක</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href='#'>පින්තූර</a></li>
                                        <li><a href='services.php'>විවිධ සේවා</a>
                                            <ul>
                                                <li><a href='services.php'>බැංකු සේවා</a>
                                                </li>
                                                <li><a href='services.php'>පාරිභෝගික සේවා</a>
                                                </li> 
                                                <li><a href='services.php'>අනෙකුත් සේවා</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href='#'>සාමාජික</a></li>
                                        <li><a href='downloadPage.php'>භාගත කිරීම</a></li>
                                        <li><a href='#'>විමසීම්</a></li>
                                    </ul>
                                </div>
                                <div style="height: 1px;border-bottom: 2px solid #ff3300"></div>
                                <div style="height: 1px;border-bottom: 2px solid #ff6600"></div>
                                <div style="height: 1px;border-bottom: 2px solid #ccff00"></div>
                                <div style="height: 1px;border-bottom: 2px solid #006600"></div> 
                                <div style="height: 1px;border-bottom: 2px solid #00cccc"></div>
                                <div style="height: 1px;border-bottom: 2px solid #0066cc"></div>
                                <div style="height: 1px;border-bottom: 2px solid #000099"></div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="row" style=" height: 30px; " >

                </div>
                <div class="overflow-hid"  style=";margin-top: -90px"> 
                    <div class="gtco-section">
                        <div class="gtco-container">
                            <div class="row" >

                            </div>
                        </div>
                    </div>
                    <div >
                        <div class="gtco-container">
                            <p style="padding-bottom: 10px;font-size: 19px;color: blue">භාගතකිරීම</p>
                            <div class="row" style="margin-top: -20px">

                                <div class="col-md-8 col-sm-3" >
                                    <div class=" animate-box" data-animate-effect="fadeIn">

                                        <div class="col-md-12">


                                            <div class=row>
                                                <?php while ($rowD = mysqli_fetch_assoc($reultDoc)) { ?>

                                                    <div class="col-md-4" style="padding-bottom: -20px;" >
                                                        <div class="thumbnail">
                                                            <img id="myImg" class="img-thumbnail image-responsive rounded" src="Source Files/Documet/<?php echo $rowD['document_image'] ?>" style=" display:block;
                                                                 margin:auto;height:250px;marging:0px;padding:0px; ">
                                                            <div class="caption">
                                                                <h5 style="padding: 5px"><?= $rowD['document_title'] ?></h5>
                                                                <?php
                                                                $doc_path = $rowD['document_file'];
                                                                $file_name = explode("/", $doc_path);
                                                                // echo 'sfdf ;'.$aa[3];
                                                                ?>
                                                                <p style="margin-top: -20px;"><a href="download.php?nama=<?= $file_name[3] ?>" class="btn btn-info  btn-block" role="button">Download</a> </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-primary animate-box">
                                        <div class="panel-heading">
                                            <span class="glyphicon glyphicon-list-alt"></span><b> නැවුම් පුවත් හා සිදුවීම්</b></div>

                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <ul class="demo1" style="padding: 2px;">
                                                        <?php
                                                        while ($rowN = mysqli_fetch_array($resultNews)) {
                                                            ?>


                                                            <li class="news-item">
                                                                <table cellpadding="2">
                                                                    <tr>
                                                                    <!--<p>sasdasdasdasd</p>-->



                                                                    <div style="float: left;padding-right: 5px;padding-bottom: 5px;">
                                                                        <img src="honest/Source Files/<?php echo $rowN['image']; ?>" width="150" style="padding-right: 2px"/>
                                                                    </div>
                                                                    <div  style="float: none;font-size: 13px;padding-left: 5px;line-height: 1.6;  ">
                                                                        <p  class="class-span" style="margin-top: -20px;max-width: 75ch;"><?php echo $rowN['news_content']; ?> </p> 
                                                                    </div>




                                                                    <div style="margin-top: -20px"><a href="#">වැඩිදුර විස්තර...</a></div>
    <!--                                                                    <td valign="top"><img src="honest/Source Files/<?php echo $rowN['image']; ?>" width="60" style="padding-right: 2px"/></td>
                                                                        <td style=";font-size: 13px;padding-left: 5px;line-height: 1.6;"><p style="margin-top: -20px"><?php echo $rowN['news_content']; ?> </p> <a href="#">වැඩිදුර විස්තර...</a></td>-->

                                                                    </tr>
                                                                </table>
                                                            </li>

                                                            <?php
                                                        }
                                                        ?>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <footer id="gtco-footer" role="contentinfo">
                        <div class="gtco-container">
                            <div class="row row-p	b-md">
                                <div class="col-md-4">
                                    <div class="gtco-widget">
                                        <h3>ආශ්‍රිත සබැදි</h3>
                                        <p>සමුපාකාර සංවර්ධන දෙපාර්තුමේන්තුව.</p>
                                        <p style="margin-top: -25px"><a href="http://www.coopdept.nw.gov.lk/coopdept/">http://www.coopdept.nw.gov.lk/coopdept/</a></p>
                                        <p>ජාතික සමුපාකාර සංවර්ධන ආයතනය.</p>
                                        <p style="margin-top: -25px"><a href="http://www.nicd.edu.lk">http://www.nicd.edu.lk</a></p>
                                        <p>අන්තර් ජාතික සමුපාකාර සන්ධානය (ICA).</p>
                                        <p style="margin-top: -25px"><a href="http://ica.coop">http://ica.coop</a></p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-md-push-1">
                                    <div class="gtco-widget">
                                        <h3>අපගේ සේවාවන්</h3>
                                        <ul class="gtco-footer-links">
                                            <li><a href="#">බැංකු</a></li>
                                            <li><a href="#">අනෙකුත්</a></li>සමුපාකාර සංවර්ධන දෙපාර්තුමේන්තුව
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-md-push-1">
                                    <div class="gtco-widget">
                                        <h3>සම්බන්ද වෙන්න</h3>
                                        <ul class="gtco-quick-contact">
                                            <li><a href="#"><i class="icon-phone"></i> 037 22 73091</a></li>
                                            <li><a href="#"><i class="icon-phone"></i> 037 57 35911</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row copyright">
                                <div class="col-md-12">
                                    <p class="pull-left">
                                        <small class="block">&copy; 2018 . All Rights Reserved.</small> 
                                        <small class="block">Design and Developing by  <a href="" target="_blank">Induwara concepts</a> </small>
                                    </p>
                                    <p class="pull-right">
                                    <ul class="gtco-social-icons pull-right">
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>


        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>

        <div id="myModal" class="modal" >
            <span class="close">&times;</span>
            <img class="modal-content" id="img01" style="width: 300px;margin-top: 100px">
            <div id="caption"></div>
        </div>
        <!-- jQuery -->
        <!-- jQuery Easing -->
        <script src="js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <!-- Waypoints -->
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/sticky.js"></script>
        <!-- Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- countTo -->
        <script src="js/jquery.countTo.js"></script>
        <!-- Stellar Parallax -->
        <script src="js/jquery.stellar.min.js"></script>
        <!-- Magnific Popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <!-- Main -->
        <script src="js/main.js"></script>
        <script type="text/javascript">
            $(function () {
                $(".demo1").bootstrapNews({
                    newsPerPage: 2,
                    autoplay: true,
                    pauseOnHover: true,
                    direction: 'up',
                    newsTickerInterval: 4000,
                    onToDo: function () {
                        //console.log(this);
                    }
                });
            });

        </script>
        <script>
// Get the modal
            var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById('myImg');
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            img.onclick = function () {
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }

// Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
            span.onclick = function () {
                modal.style.display = "none";
            }
        </script>




    </body>
</html>

