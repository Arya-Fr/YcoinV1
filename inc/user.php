<?php
// authent user
function authenticate(string $pseudo, string $mail, PDO $pdo): bool
{
    // return true si déjà authentifié

    $stmt = $pdo->prepare('SELECT pseudo, mail FROM utilisateur WHERE pseudo = :pseudo AND mail = :mail');
    $stmt->execute([
        'pseudo' => $pseudo,
        'mail' => $mail
    ]);

    $result = $stmt->fetch();

    if (!empty($result)) {
       // echo 'connecté!';
       $stmt = $pdo->prepare('SELECT id FROM utilisateur WHERE pseudo = :pseudo AND mail = :mail');
       $stmt->execute([
        'pseudo' => $pseudo,
        'mail' => $mail
        ]);
        $id = $stmt->fetch();

        $_SESSION['connected'] = true;
        $_SESSION['user_id'] = $id;
        return true;
    } else {
        return false;
    }
}

// check if is logged
function is_logged(): bool
{
    return isset($_SESSION['connected']);
}

// subscribe
function subscribe(string $pseudo, string $mail, PDO $pdo): bool
{
    $stmt = $pdo->prepare('SELECT pseudo FROM utilisateur WHERE pseudo = :pseudo');
    $stmt->execute(['pseudo' => $pseudo]);

    $result = $stmt->fetch();

    $stmt2 = $pdo->prepare('SELECT mail FROM utilisateur WHERE mail = :mail');
    $stmt2->execute(['mail' => $mail]);

    $result2 = $stmt2->fetch();

    if (!empty($result) || !empty($result2)) {
        return false;
     } else {
        $sql = 'INSERT INTO utilisateur (pseudo, mail, argent) VALUES (:pseudo, :mail, 0)';
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            'pseudo' => $pseudo,
            'mail' => $mail
        ]);

        return true;
     }
}