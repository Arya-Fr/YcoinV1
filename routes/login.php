<?php

if (isset($_POST['pseudo']) && isset($_POST['mail'])) {
    if (authenticate($_POST['pseudo'], $_POST['mail'], $pdo)){
    }else {
        echo "<p style='color:red;background-color:lightgrey;'>Mauvais pseudo ou adresse mail.</p>";
    }
}

if (is_logged()) {
    header('Location: /home');
} else {
    $title = 'Login page';
    require($_SERVER['DOCUMENT_ROOT'] . '/../inc/templates/header.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/../inc/templates/login_form.php');
}

?>
