<?php


$errors = [];
if (!array_key_exists('nom', $_POST) | $_POST ['nom'] == '') {
    $errors['nom'] = "Vous n'avez pas renseigné de nom";
}
if (!array_key_exists('email', $_POST) | $_POST ['email'] == '') {
    $errors['email'] = "Vous n'avez pas renseigné votre Email";
}
if (!array_key_exists('prenom', $_POST) | $_POST ['prenom'] == '') {
    $errors['prenom'] = "Vous n'avez pas renseigné de prenom";
}
if (!array_key_exists('tel', $_POST) | $_POST ['tel'] == '') {
    $errors['tel'] = "Vous n'avez pas renseigné de numero de telephone";
}


session_start();


if (!empty($errors)) {

    $_SESSION['errors'] = $errors;
    $_SESSION['input'] = $_POST;
    header('location:contact.php');


} else {
    $_SESSION ['success'] = 1;
    $message = $_POST['message'];
    $headers = 'FROM:tika@loval.dev';
    mail('web2020.thomas@gmail.com', 'Formulaire de contact', $message, $headers);
    header('location:contact.php');

}
