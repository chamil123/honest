<?php

if (!isset($_SESSION)) {
    session_start();
}
//error_reporting(E_ERROR || E_WARNING);
require '../Model/AlbumModel.php';
$album = new Album();

$action = $_GET['action'];

if ($action == "add") {
    $album_title = $_POST['album_title'];
    $alubum_comment = $_POST['alubum_comment'];

    $folder = "../../uploads/";
    $file = $folder . basename($_FILES["album_image"]["name"]);
    $sourseFile = $_FILES["album_image"]["tmp_name"];
    if (file_exists($file)) {
        $file = $folder . date("ydmhis") . basename($_FILES["album_image"]["name"]);
    }
    if (move_uploaded_file($sourseFile, $file)) {
        echo 'upload successfull';
    } else {
        echo 'error uploading';
        $file = "../../uploads/default-placeholder-1024x1024-400x280.png";
    }
    //echo 'class : '.$member_class."<br/> type : ".$member_type."<br/>  name :  ".$member_name;
    $lastAlbum_id = $album->addAlbum($album_title, $alubum_comment, $file);

    echo 'dasd : ' . $lastAlbum_id;
    if ($lastAlbum_id > 0) {
        $_SESSION['msgU'] = 1;
    }
    $targetDir = "../albums/";
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if (!empty(array_filter($_FILES['mutiple_images']['name']))) {
        foreach ($_FILES['mutiple_images']['name'] as $key => $val) {
            $fileName = basename($_FILES['mutiple_images']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if (in_array($fileType, $allowTypes)) {
                if (move_uploaded_file($_FILES["mutiple_images"]["tmp_name"][$key], $targetFilePath)) {

                    //echo 'sdsd : ' . $fileName;
                    $lastalbumImg = $album->addAlbumImages($fileName, $lastAlbum_id);
                    //$insertValuesSQL .= "('" . $fileName . "', NOW()),";
                } else {
                    $errorUpload .= $_FILES['mutiple_images']['name'][$key] . ', ';
                }
            } else {
                $errorUploadType .= $_FILES['mutiple_images']['name'][$key] . ', ';
            }
        }
    }
    header("Location:../AddAlbum.php");
}
?>