<?php
require './src/isValid.php';

$errors = '';
$hasSend = false;

if(isset($_POST["submit"])) {
    $valid = new IsValid();

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $valid->checkField($name, "name" , FILTER_SANITIZE_STRING);
    $errors = $valid->errorMessage;

    $valid->checkField($email, "email", FILTER_SANITIZE_EMAIL);
    $errors = $valid->errorMessage;

    $valid->checkField($message, 'message', FILTER_SANITIZE_STRING);
    $errors = $valid->errorMessage;

    if(!$errors) {
        $hasSend = true;
    }
}





require "./src/app.view.php";