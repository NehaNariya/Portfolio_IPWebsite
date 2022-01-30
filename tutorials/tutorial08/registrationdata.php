<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    echo "<pre>";
    $file=$_FILES['image'];
    print_r($file);
    echo "</pre>";

    $frompath=$file['tmp_name'];
    $topath="upload/".$file['name'];
    move_uploaded_file($frompath,$topath);
?>