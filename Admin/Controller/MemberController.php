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
    $member_name= $_POST['member_name'];


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
    $lastUserId = $member->addMember($member_class,$member_type, $member_name,$file);
   
   
   


    if ($lastUserId > 0) {
        $_SESSION['msgU'] = 1;
    }
    header("Location:../AddMember.php");
} 
?>