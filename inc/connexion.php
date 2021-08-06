<?php

$dsn = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/../config/dsn');
$credentials_handle = fopen($_SERVER['DOCUMENT_ROOT'] . '/../config/credentials', 'r');
$credentials_array = [];

// @todo faire deux fgets

while ($line = fgets($credentials_handle)) {
    $credentials_array[] = trim($line);
}
[$user] = $credentials_array;

$pdo = new PDO($dsn, $user);