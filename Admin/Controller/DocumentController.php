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
    if ($file != "") {
        //echo 'class : '.$member_class."<br/> type : ".$member_type."<br/>  name :  ".$member_name;
        $lastUserId = $document->addDocument($document_title, $file);
        if ($lastUserId > 0) {
            $_SESSION['msgU'] = 1;
        }
        header("Location:../AddDocument.php");
    } else {

        $_SESSION['msgU'] = 5;
        header("Location:../AddDocument.php");
    }
} else if ($action == "update") {
    $member_id = $_POST['member_id'];
    $member_class = $_POST['member_class'];
    $member_type = $_POST['member_type'];
    $member_name = $_POST['member_name'];

    $folder = "../../uploads/";
    $file = $folder . basename($_FILES["user_image"]["name"]);
    $sourseFile = $_FILES["user_image"]["tmp_name"];
    if (file_exists($file)) {
        $file = $folder . date("ydmhis") . basename($_FILES["user_image"]["name"]);
    }
    if (move_uploaded_file($sourseFile, $file)) {
        echo 'upload successfull';
    } else {
        echo 'error uploading';
        $file = "../../uploads/default-user.png";
    }
    echo 'class : ' . $member_class . "<br/> type : " . $member_type . "<br/>  name :  " . $member_name . "<br/> id :" . $member_id;
    $lastUserId = $member->updateMember($member_id, $member_class, $member_type, $member_name, $file);
    if ($lastUserId > 0) {
        $_SESSION['msgU'] = 3;
    }
    header("Location:../ViewMembers.php");
}
?>