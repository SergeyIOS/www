<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');

    
    $name = $_POST['name'];
    if (trim($_POST['name']) === '')
        die('Name is empty');
    $email = $_POST['email'];
    if (trim($_POST['email']) === '')
        die('Email is empty');
    $tel = $_POST['phone'];
    if (trim($_POST['phone']) === '')
        die('Phone is empty');
    $file = "data.php";
    $Saved_File = fopen($file, 'w+');
    fwrite($Saved_File, "<br> Имя: $name <br> Почта: $email <br> телефон: $tel <br> ");
    fclose($Saved_File);

var_dump($_POST);
var_dump($_REQUEST);
?>
 