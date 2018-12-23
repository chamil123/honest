<?php
$filename = $_GET["nama"];
$contenttype = "application/force-download";
header("Content-Type: " . $contenttype);
header("Content-Disposition: attachment; filename=\"" . basename($filename) . "\";");
readfile("Document/".$filename);
exit();
?>