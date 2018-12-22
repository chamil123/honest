<?php

include '../../database/connection.php';

class Document {

    function addDocument($document_title, $file) {
        global $con;
        $sql = "INSERT into document (document_title,document_file) VALUES('$document_title','$file')";
        $Query = mysqli_query($con, $sql);
        if ($Query) {
            return $con->insert_id;
        } else {
            return FALSE;
        }
    }

    function viewAllDocuments() {
        global $con;
        $sql = "SELECT*FROM document";
        $Query = mysqli_query($con, $sql);
        return $Query;
    }

}

?>