<?php
// Downloads files
// Tentukan folder file yang boleh di download
$folder = "../file/";
$filename = $_GET['dokumen'];
$file_extension = strtolower(substr(strrchr($filename,"."),1));
  //header("Cache-Control: public");
 //header("Content-Description: File Transfer");
 header("Content-Disposition: attachment; filename=".basename($filename));
 header("Content-Type: application/octet-stream;");
 //header("Content-Transfer-Encoding: binary");
 readfile("file/".$filename);
?>