<?php

if (!is_logged()) {
    header('Location: /login');
}

$stmt = $pdo->prepare('SELECT argent FROM utilisateur WHERE id = :id');
$stmt->execute(['id' => $_SESSION['user_id'][0]]);
$argent = $stmt->fetch();

if (isset ($_POST['minage'])){
    $somme = $argent[0] + 10;

    $stmt = $pdo->prepare('UPDATE utilisateur SET argent = :somme WHERE id = :id');
    $stmt->execute([
        'somme' => $somme,
        'id' => $_SESSION['user_id'][0]]
    );

    $stmt = $pdo->prepare('SELECT argent FROM utilisateur WHERE id = :id');
    $stmt->execute(['id' => $_SESSION['user_id'][0]]);
    $argent = $stmt->fetch();
}

if (isset($_POST['montant'])){
    if (envoi($_POST['montant'],$_POST['active'],$pdo)){
        $stmt = $pdo->prepare('SELECT argent FROM utilisateur WHERE id = :id');
        $stmt->execute(['id' => $_SESSION['user_id'][0]]);
        $argent = $stmt->fetch();
    ?>
        <div style="position: absolute;right: 765px;top:720px;padding:10px;background: #23B2A4;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 27px;font-family: Roboto;font-style: normal;font-weight: normal;font-size: 18px;line-height: 21px;align-content: center;color: white;">Transaction Réussi</div>
    <?php
    }else{
        ?>
        <div style="position: absolute;right: 760px;top:720px;padding:10px;background: #23B2A4;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 27px;font-family: Roboto;font-style: normal;font-weight: normal;font-size: 18px;line-height: 21px;align-content: center;color: red;">Transaction Échoué</div>
    <?php
    }
}

require($_SERVER['DOCUMENT_ROOT'] . '/../inc/templates/home_app.php');
 ?>

<script type="text/javascript" src="/../assets/js/modif_de_page.js"></script>