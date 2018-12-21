<?php

if (!isset($_SESSION)) {
    session_start();
}
//error_reporting(E_ERROR || E_WARNING);
require '../Model/NewsModel.php';
$news = new News();

$action = $_GET['action'];

if ($action == "add") {
    $news_title = $_POST['news_title'];
    $newsContent = $_POST['ckeditor'];

//
    $folder = "../../uploads/";
    $file = $folder . basename($_FILES["news_image"]["name"]);
    $sourseFile = $_FILES["news_image"]["tmp_name"];
    if (file_exists($file)) {
        $file = $folder . date("ydmhis") . basename($_FILES["news_image"]["name"]);
    }
    if (move_uploaded_file($sourseFile, $file)) {
        echo 'upload successfull';
    } else {
        echo 'error uploading';
        $file = "../../uploads/default.jpg";
    }
    //echo 'class : '.$member_class."<br/> type : ".$member_type."<br/>  name :  ".$member_name;
    $lastUserId = $news->addNews($news_title,$newsContent,$file);
    if ($lastUserId > 0) {
        $_SESSION['msgU'] = 1;
    }
    header("Location:../AddNews.php");
}
?>