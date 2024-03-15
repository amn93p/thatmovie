<?php
require_once(__DIR__ . '/../../config/function.php');


require_once(__DIR__ . '/../Views/security/register.view.php');



require_once(__DIR__ . '/../Models/User.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $user = new User();


    $registered = $user->registerUser($username, $email, $password);

    if ($registered) {
        redirectToRoute('/');
        exit(); 
    } else {

        $error = "Inscription echouée.";
    }
}
