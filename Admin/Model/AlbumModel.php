<?php

include '../../database/connection.php';

class Album {

    function addAlbum($album_title, $alubum_comment, $file) {
        global $con;
        $sql = "INSERT into album (album_title,album_comment,album_image) VALUES('$album_title','$alubum_comment','$file')";
        $Query = mysqli_query($con, $sql);
        if ($Query) {
            return $con->insert_id;
        } else {
            return FALSE;
        }
    }

    function addAlbumImages($fileName, $lastAlbum_id) {
        global $con;
        $sql = "INSERT into album_images (album_images_image,album_id) VALUES('$fileName',$lastAlbum_id)";
        $Query = mysqli_query($con, $sql);
        if ($Query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function getAllAlbums() {
        global $con;
        $sql = "SELECT 
                    *, COUNT(ai.album_id) AS img_count
                FROM
                    album a
                        INNER JOIN
                    album_images ai ON a.album_id = ai.album_id
                WHERE
                    1
                GROUP BY a.album_id";
        $Query = mysqli_query($con, $sql);
        return $Query;
    }

    function getAllAlbumImages($album_id) {
        global $con;
        $sql = "SELECT*FROM album_images WHERE album_id=$album_id";
        $Query = mysqli_query($con, $sql);
        return $Query;
    }

}

?>