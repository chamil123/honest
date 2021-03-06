<?php

if (!isset($_SESSION)) {
    session_start();
}
//error_reporting(E_ERROR || E_WARNING);
require '../Model/MemberModel.php';
$member = new Member();

$action = $_GET['action'];

if ($action == "add") {
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
    //echo 'class : '.$member_class."<br/> type : ".$member_type."<br/>  name :  ".$member_name;
    $lastUserId = $member->addMember($member_class, $member_type, $member_name, $file);
    if ($lastUserId > 0) {
        $_SESSION['msgU'] = 1;
    }
    header("Location:../AddMember.php");
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
} else if ($action == "delete") {
    $member_id = $_GET['member_id'];


    //echo 'class : '.$member_class."<br/> type : ".$member_type."<br/>  name :  ".$member_name;
    $lastUserId = $news->deleteMember($member_id);
    if ($lastUserId > 0) {
        $_SESSION['msgU'] = 2;
    }
    header("Location:../ViewMembers.php");
}
?>