<?php

if (is_logged()) {
    header('Location: /');
} else {
    if (isset($_POST['mail']) && isset($_POST['pseudo'])) {
       if (subscribe($_POST['pseudo'], $_POST['mail'], $pdo)) {
            header('Location: /login');
        } else {
            echo "<p style='color:red;background-color:lightgrey;'>L'adresse mail ou le pseudo est déjà pris.</p>";
        }
    }
}


$title = 'Inscription';
require($_SERVER['DOCUMENT_ROOT'] . '/../inc/templates/header.php');
require($_SERVER['DOCUMENT_ROOT'] . '/../inc/templates/subscription_form.php');