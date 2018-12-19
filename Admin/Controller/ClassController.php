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
    $member_name= $_POST['member_name'];


    $lastUserId = $member->addClass($member_class, $member_name);
  
    if ($lastUserId > 0) {
        $_SESSION['msgU'] = 1;
    }
    header("Location:../AddClass.php");
} 
?>