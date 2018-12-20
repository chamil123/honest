<?php
if (!isset($_SESSION)) {
    session_start();
}
error_reporting(E_ERROR || E_WARNING);
require_once'./database/connection.php';
include './Admin/Model/MemberModel.php';
$member = new Member();


$reultClass = $member->viewClass();
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                //  height: 188px;
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
            }
        </style> 
    </head>
    <body>
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
                            </div>
                            <div>
                                <div id='cssmenu'>
                                    <ul>
                                        <li class='active'><a   href='index.html'>මුල්</a></li>
                                        <li ><a href='intro.html'>අප</a>
                                            <ul>
                                                <li><a href='intro.html'>හැදින්වීම</a>
                                                </li>
                                                <li><a href='directors.php.html'>අධ්‍යක්ෂක</a>
                                                </li>
                                                <li><a href='directors.php.html'>විධායක</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href='#'>පින්තූර</a></li>
                                        <li><a href='services.html'>විවිධ සේවා</a>
                                            <ul>
                                                <li><a href='services.html'>බැංකු සේවා</a>
                                                </li>
                                                <li><a href='services.html'>පාරිභෝගික සේවා</a>
                                                </li> 
                                                <li><a href='services.html'>අනෙකුත් සේවා</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href='#'>සාමාජික</a></li>
                                        <li><a href='#'>භාගත කිරීම</a></li>
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
                <div class="row" style=" height: 570px; " >
                    <div id='hislider1' style="z-index: -1; width:auto;  max-height:570px;height:100%; margin-top: 0px;padding:0px">
                    </div>
                </div>
                <div class="overflow-hid"  style=";margin-top: -90px"> 
                    <div class="gtco-section">
                        <div class="gtco-container">
                            <div class="row" >
                                <div class="col-lg-4 col-md-4 col-sm-6 animate-box" >
                                    <a href="intro.html" id="1" onClick="reply_click(this.id)" class="gtco-card-item">
                                        <figure>
                                            <div class="overlay"><i class="ti-plus"></i></div>
                                            <div style="background-color: #41AFDC;height: 240px;border-bottom: 6px solid #228CB7">
                                                <div  class=" box_heading_icon">
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                                <p class="box_heading">දර්ශනය</p>
                                                <div class="gtco-text">
                                                    <p class="box_content">තිරසාර සංවර්ධනය තුලින් වයඹ පළාතේ විශිෂ්ඨතම සමුපාකාර ව්‍යවසායකයා වීම...</p>
                                                </div>
                                            </div>
                                        </figure>
                                        <div class="gtco-text">

                                            <p><span class="btn btn-primary">වැඩිදුර කියවන්න</span></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 animate-box">
                                    <a href="intro.html" class="gtco-card-item">
                                        <figure>
                                            <div class="overlay"><i class="ti-plus"></i></div>
                                            <div style="background-color: #41C5DC;height: 240px;border-bottom: 6px solid #1B96AC">
                                                <div  class=" box_heading_icon">
                                                    <i class="fa fa-bullseye  " ></i>
                                                </div>
                                                <p class="box_heading">මෙහෙවර</p>
                                                <div class="gtco-text">
                                                    <p class="box_content">සාමාජික, සේවක ප්‍රජාව පෙරටු කර ගනිමින් ඔවුන්ගේ  අවශ්‍යතා, උවමනා, අපේක්ෂාවන් ඉටු කරමින් ..</p>
                                                </div>
                                            </div>
                                        </figure>
                                        <div class="gtco-text">
                                            <p><span class="btn btn-primary">වැඩිදුර කියවන්න</span></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 animate-box">
                                    <a href="intro.html" class="gtco-card-item">
                                        <figure>
                                            <div class="overlay"><i class="ti-plus"></i></div>
                                            <div style="background-color: #0171B7;height: 240px;border-bottom: 6px solid #015285">
                                                <div  class=" box_heading_icon">
                                                    <i class="fa fa-location-arrow"></i>
                                                </div>
                                                <p class="box_heading">හැඳින්වීම</p>
                                                <div class="gtco-text">
                                                    <p class="box_content" style="font-size: 0.9em">වයඹ පළාතේ කුරුණෑගල දිස්ත්‍රීක්කයේ පොල්පිතිගම ප්‍රාදේශීය ලේකම් කොට්ඨාශය ආවරණය වන බල ප්‍රදේශය සී/ස පොල්පිතිගම ..</p>
                                                </div>
                                            </div>
                                        </figure>
                                        <div class="gtco-text">
                                            <p><span class="btn btn-primary">වැඩිදුර කියවන්න</span></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="gtco-features">
                        <div class="gtco-container">
                            <div class="row" style="margin-top: -20px">
                                <div class="col-md-8 col-sm-3" >
                                    <div class=" animate-box" data-animate-effect="fadeIn">
                                        <div class="col-md-12 animate-box gtco-card-item" style="height: 145px; background-color: #ffffff;padding-top: 10px">
                                            <?php
                                            $result = $member->viewMembers();
                                            while ($row = mysqli_fetch_array($result)) {
                                                if ($row['member_class_id'] == 1) {
                                                    ?>
                                                    <div class="col-md-3" style="padding-top: 5px">
                                                        <img src="Source Files/Uploads/<?php echo $row['member_image']; ?>" class="user-image"  />
                                                    </div>
                                                    <div class="col-md-8" style="padding-top: 35px">
                                                        <h3 style="color: #000000"><?php echo $row['member_class_name']; ?> </h3>
                                                        <p style="margin-top: -10px;color: #000000"><?php echo $row['member_name']; ?></p>
                                                    </div>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-12 animate-box gtco-card-item" style="height: 145px; background-color: #ffffff;padding-top: 10px">
                                            <?php
                                            $result1 = $member->viewMembers();
                                            while ($row1 = mysqli_fetch_array($result1)) {
                                              
                                                if ($row1['member_class_id'] == 6) {
                                                    ?>
                                                    <div class="col-md-3" style="padding-top: 5px">
                                                        <img src="Source Files/Uploads/<?php echo $row1['member_image']; ?>" class="user-image"  />   
                                                    </div>
                                                    <div class="col-md-8" style="padding-top: 35px">
                                                        <h3 style="color: #000000"><?php echo $row1['member_class_name']; ?> </h3>         
                                                        <p style="margin-top: -10px;color: #000000"><?php echo $row1['member_name']; ?></p>
                                                    </div>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-12 animate-box gtco-card-item" style="height: 145px; background-color: #ffffff;padding-top: 10px">
                                            <?php
                                            $result2 = $member->viewMembers();
                                            while ($row2 = mysqli_fetch_array($result2)) {
                                                if ($row2['member_class_id'] == 5) {
                                                    ?>
                                                    <div class="col-md-3" style="padding-top: 5px">

                                                        <img src="Source Files/Uploads/<?php echo $row2['member_image']; ?>" class="user-image"  /> 

                                                    </div>
                                                    <div class="col-md-8" style="padding-top: 35px">
                                                        <h3 style="color: #000000"><?php echo $row2['member_class_name']; ?>  </h3>
                                                        <p style="margin-top: -10px;color: #000000"><?php echo $row2['member_name']; ?></p>
                                                    </div>
                                                    <?php
                                                }
                                            }
                                            ?>
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
                                                        <li class="news-item">
                                                            <table cellpadding="2">
                                                                <tr>
                                                                    <td valign="top"><img src="uploads/default.jpg" width="60" style="padding-right: 2px"/></td>
                                                                    <td><p style="font-size: 11px;padding-left: 5px"><span style="font-weight: bold;">    2014.03.24</span> වන දින <span style="font-weight: bold;">පෙ.ව. 9.30ට</span> යෙදෙන සුභ මොහොතින් වයඹ පළාත් ප්‍රධාන අමාත්‍ය ගරු <span style="font-weight: bold;">ධර්මසිරි දසනායක</span> මැතිදුන්ගේ සුරතින් මොරගොල්ලාගම නව සමුපකාර හා ග්‍රාමීය බැංකු නව ගොඩනැගිල්ලේදී ජනතා අයිතියට පත් කිරීම....</p> <a href="#">වැඩිදුර විස්තර...</a></td>
                                                                </tr>
                                                            </table>
                                                        </li>
                                                        <li class="news-item">
                                                            <table cellpadding="4">
                                                                <tr>
                                                                    <td valign="top"><img src="uploads/default.jpg" width="60"  /></td>
                                                                    <td><p style="font-size: 11px;padding-left: 5px"><span style="font-weight: bold;">    2018.03.24</span> වන දින <span style="font-weight: bold;">පෙ.ව. 11.30 ට</span> සමිති බල ප්‍රදේශයේ <span style="font-weight: bold;">5 වසර ශිෂ්‍යත්වය සමතුන්</span> ඇගැයිමේ උළෙල වයඹ පළාත් ප්‍රධාන අමාත්‍ය ගරු <span style="font-weight: bold;">ධර්මසිරි දසනායක</span> මැතිදුන්ගේ ප්‍රධානත්වයෙන් පොල්පිතිගම ජාතික පාසල් ශ්‍රවණාගාරයේදී පැවැත්වේ..</p> <a href="#">වැඩිදුර විස්තර...</a></td>
                                                                </tr>
                                                            </table>
                                                        </li>
                                                        <li class="news-item">
                                                            <table cellpadding="4">
                                                                <tr>
                                                                    <td valign="top"><img src="uploads/default.jpg" width="60"  /></td>
                                                                    <td>
                                                                        <span style="font-weight: bold;font-size: 12px;;padding-left: 5px; color: blue">සමුපකාරය පොදු ජනතාවගේ ව්‍යාපාරයක්</span>
                                                                        <p style="font-size: 11px;padding-left: 5px">මිත්‍රශීලිභාවය, එකමුත බව, සමානාත්මතාව, සාමුහිකත්වය සමාජවාදී දේශපාලන සිද්ධාන්ත වලට බොහෝ සමීපයෙන් සිටින ව්‍යාපාරක් ලෙස සමුපකාර ව්‍යාපාරය ලෝකය පුරා උගතුන්ගේ සහ බුද්ධිමතුන්ගේ ..</p> <a href="#">වැඩිදුර විස්තර...</a></td>
                                                                </tr>
                                                            </table>
                                                        </li>
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
                                                newsPerPage: 3,
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
    </body>
</html>

