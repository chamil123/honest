<?php

include '../../database/connection.php';

class News {

    function addNews($news_title, $newsContent,$file) {
        global $con;
        $sql = "INSERT into news (news_title,news_content,image) VALUES('$news_title','$newsContent','$file')";
        $Query = mysqli_query($con, $sql);
        if ($Query) {
            return $con->insert_id;
        } else {
            return FALSE;
        }
    }

    function viewNews() {
        global $con;
        $sql = "SELECT*FROM news";
        $Query = mysqli_query($con, $sql);
        return $Query;
    }

    function viewAllNews() {
        global $con;
        $sql = "SELECT*FROM news";
        $Query = mysqli_query($con, $sql);
        return $Query;
    }

}

?>