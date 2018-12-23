<?php

$usename = $_POST['Username'];
$password = $_POST['Password'];

if ($usename == "admin" && $password == "admin") {
    header("Location:../ViewMembers.php");
} else {
    header("Location:../index.php?msg=username or password incorrect");
}
?>