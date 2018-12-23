<?php

include '../../database/connection.php';

class Document {

    function addDocument($document_title, $file, $fileImag) {
        global $con;
        $sql = "INSERT into document (document_title,document_file,document_image) VALUES('$document_title','$file','$fileImag')";
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

    function viewDocumentById($document_Id) {
        global $con;
        $sql = "SELECT*FROM document WHERE document_id=$document_Id";
        $Query = mysqli_query($con, $sql);
        return $Query;
    }

    function updateDocument($document_id, $document_title, $file, $fileImag) {
        global $con;
        $sql = "UPDATE document SET document_title='$document_title',document_file='$file',document_image='$fileImag' WHERE document_id=$document_id";
        $Query = mysqli_query($con, $sql);
        if ($Query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function deletedocuments($document_id) {
        global $con;
        $sql = "DELETE FROM document WHERE document_id=$document_id";
        $Query = mysqli_query($con, $sql);
        if ($Query) {
            return true;
        } else {
            return FALSE;
        }
    }

}

?>