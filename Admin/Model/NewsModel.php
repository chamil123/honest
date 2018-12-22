<?php

include '../../database/connection.php';

class News {

    function addNews($news_title, $newsContent, $file) {
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

    function viewNewsbyId($new_id) {
        global $con;
        $sql = "SELECT*FROM news WHERE news_id=$new_id";
        $Query = mysqli_query($con, $sql);
        return $Query;
    }

    function updateNews($news_id, $news_title, $newsContent, $file) {
        global $con;
        $sql = "UPDATE news SET news_title='$news_title',news_content='$newsContent',image='$file' WHERE news_id=$news_id";
        $Query = mysqli_query($con, $sql);
        if ($Query) {
            return true;
        } else {
            return FALSE;
        }
    }

    function deleteNews($news_id) {
        global $con;
        $sql = "DELETE FROM news WHERE news_id=$news_id";
        $Query = mysqli_query($con, $sql);
        if ($Query) {
            return true;
        } else {
            return FALSE;
        }
    }

}

?>