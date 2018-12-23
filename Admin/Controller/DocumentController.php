<?php

if (!isset($_SESSION)) {
    session_start();
}
//error_reporting(E_ERROR || E_WARNING);
require '../Model/DocumentModel.php';
$document = new Document();

$action = $_GET['action'];

if ($action == "add") {
    $document_title = $_POST['document_title'];


    $folder = "../../Document/";
    $file = $folder . basename($_FILES["document_file"]["name"]);
    $sourseFile = $_FILES["document_file"]["tmp_name"];
    if (file_exists($file)) {
        $file = $folder . date("ydmhis") . basename($_FILES["document_file"]["name"]);
    }
    if (move_uploaded_file($sourseFile, $file)) {
        echo 'upload successfull';
    } else {
        echo 'error uploading';
        $file = "";
    }


    $fileImag = $folder . basename($_FILES["document_image"]["name"]);
    $sourseFile = $_FILES["document_image"]["tmp_name"];
    if (file_exists($fileImag)) {
        $fileImag = $folder . date("ydmhis") . basename($_FILES["document_image"]["name"]);
    }
    if (move_uploaded_file($sourseFile, $fileImag)) {
        echo 'upload successfull';
    } else {
        echo 'error uploading';
        $fileImag = "../../images/articles.png";
    }


    if ($file != "") {
        //echo 'class : '.$member_class."<br/> type : ".$member_type."<br/>  name :  ".$member_name;
        $lastUserId = $document->addDocument($document_title, $file, $fileImag);
        if ($lastUserId > 0) {
            $_SESSION['msgU'] = 1;
        }
        header("Location:../AddDocument.php");
    } else {

        $_SESSION['msgU'] = 5;
        header("Location:../AddDocument.php");
    }
} else if ($action == "update") {
    $document_id = $_POST['document_id'];
    $document_title = $_POST['document_title'];


    $folder = "../../Document/";
    $file = $folder . basename($_FILES["document_file"]["name"]);
    $sourseFile = $_FILES["document_file"]["tmp_name"];
    if (file_exists($file)) {
        $file = $folder . date("ydmhis") . basename($_FILES["document_file"]["name"]);
    }
    if (move_uploaded_file($sourseFile, $file)) {
        echo 'upload successfull';
    } else {
        echo 'error uploading';
        $file = "";
    }


    $fileImag = $folder . basename($_FILES["document_image"]["name"]);
    $sourseFile = $_FILES["document_image"]["tmp_name"];
    if (file_exists($fileImag)) {
        $fileImag = $folder . date("ydmhis") . basename($_FILES["document_image"]["name"]);
    }
    if (move_uploaded_file($sourseFile, $fileImag)) {
        echo 'upload successfull';
    } else {
        echo 'error uploading';
        $fileImag = "";
    }

    if ($file != "" || $fileImag != "") {
        //echo 'class : '.$member_class."<br/> type : ".$member_type."<br/>  name :  ".$member_name;
        $lastUserId = $document->updateDocument($document_id, $document_title, $file, $fileImag);
        if ($lastUserId > 0) {
            $_SESSION['msgU'] = 1;
        }
        header("Location:../ViewDocuments.php");
    } else {

        $_SESSION['msgU'] = 5;
        header("Location:../ViewDocuments.php");
    }
} else if ($action == "delete") {
    $document_id = $_GET['document_id'];


    //echo 'class : '.$member_class."<br/> type : ".$member_type."<br/>  name :  ".$member_name;
    $lastdoc_id = $document->deletedocuments($document_id);
    if ($lastdoc_id > 0) {
        $_SESSION['msgU'] = 2;
    }
    header("Location:../ViewDocuments.php");
}
?>