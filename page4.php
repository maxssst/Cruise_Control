<?php
session_start();
require_once("login_checkout.php");

if (isset($_POST['download_pdf'])) {
    //Upload foto
    foreach ($_FILES["pictures"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
            $name = basename($_FILES["pictures"]["name"][$key]);
            move_uploaded_file($tmp_name, "data/$name");
        } else {
            $name = "";
        }
    }
    //connect modules
    require('modules/forms.php'); //fill forms
    require_once("dbconnect.php"); // DATABASE CONNECTION
    require('modules/mysql_add_employer.php'); // add to MYSQL database employer

    require('fpdf/fpdf.php'); // requared support for pdf extrention
    require('modules/pdf_creator.php'); // create PDF Application file for Download
}
// header("HTTP/1.1 301 Moved Permanently");
// header("Location: " . $address_site . "/index_download.php");
