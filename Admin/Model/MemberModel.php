<?php

include '../../database/connection.php';

class Member {

    function addMember($member_class, $member_type, $member_name, $file) {
        global $con;
        $sql = "INSERT into member (member_class_id,member_name,member_image,member_status,member_tittle) VALUES($member_type,'$member_name','$file','active',$member_class)";
        $Query = mysqli_query($con, $sql);
        if ($Query) {
            return $con->insert_id;
        } else {
            return FALSE;
        }
    }

    function addClass($member_type, $member_name) {
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

    function getMemberByClass($member_class) {
        global $con;
        $sql = "SELECT*FROM member_classs WHERE member_class_type=$member_class";
        $Query = mysqli_query($con, $sql);
        return $Query;
    }

    function viewClass() {
        global $con;
        $sql = "SELECT*FROM member_classs";
        $Query = mysqli_query($con, $sql);
        return $Query;
    }

    function viewClassByClassId($class_id) {
        global $con;
        $sql = "SELECT*FROM member_classs WHERE member_class_type=$class_id";
        $Query = mysqli_query($con, $sql);
        return $Query;
    }

    function viewMemberById($member_id) {
        global $con;
        $sql = "SELECT 
                    *
                FROM
                    member m
                        INNER JOIN
                    member_classs mc ON mc.member_class_id = m.member_class_id
                WHERE
                    m.member_id = $member_id
                ORDER BY m.member_class_id";
        $Query = mysqli_query($con, $sql);
        return $Query;
    }

    function updateMember($member_id, $member_class, $member_type, $member_name, $file) {
        global $con;
        $sql = "UPDATE member SET member_name='$member_name',member_image='$file',member_class_id=$member_type WHERE member_id=$member_id";
        $Query = mysqli_query($con, $sql);
        if ($Query) {
            return true;
        } else {
            return FALSE;
        }
    }function deleteMember($member_id) {
        global $con;
        $sql = "DELETE FROM member WHERE member_id=$member_id";
        $Query = mysqli_query($con, $sql);
        if ($Query) {
            return true;
        } else {
            return FALSE;
        }
    }

}

?>