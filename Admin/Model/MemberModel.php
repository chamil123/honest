<?php

include '../../database/connection.php';

class Member {

    function addMember($member_class,$member_type, $member_name,$file) {
        global $con;
        echo 'class : '.$member_class."<br/> type :".$member_type."<br/> name : ". $member_name."<br/> file : ".$file;
        $sql = "INSERT into member (member_class_id,member_name,member_image,member_status,member_tittle) VALUES($member_type,'$member_name','$file','active',$member_class)";
        $Query = mysqli_query($con, $sql);
        if ($Query) {
            return $con->insert_id;
        } else {
            return FALSE;
        }
    }function addClass($member_type, $member_name) {
        global $con;
        $sql = "INSERT into member_classs (member_class_name,member_class_type) VALUES('$member_name','$member_type')";
        $Query = mysqli_query($con, $sql);
        if ($Query) {
            return $con->insert_id;
        } else {
            return FALSE;
        }
    }

    function viewMembers() {
        global $con;
        $sql = "SELECT 
                    *
                FROM
                    member m
                        INNER JOIN
                    member_classs mc ON mc.member_class_id = m.member_class_id ORDER BY m.member_class_id";
        $Query = mysqli_query($con, $sql);
        return $Query;

    }
    function getMemberByClass($member_class){
        global $con;
        $sql = "SELECT*FROM member_classs WHERE member_class_type=$member_class";
        $Query = mysqli_query($con, $sql);
        return $Query;
    }

}

?>