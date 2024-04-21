<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "documents/";
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt","pdf","doc","docx");

    $maxfileSize = 10 * 1024 * 1024;

    if (in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxfileSize){
        if(move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)){
            echo"File berhasil diunggah.";
        }
        else{
            echo "Gagal mengunggah document.";
        }
    }
    else {
        echo "Jenis document tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
?>