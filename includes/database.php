<?php

$db = mysqli_connect(
    $_ENV['database.default.hostname'], 
    $_ENV['database.default.username'], 
    $_ENV['database.default.password'],
    $_ENV['database.default.database']
);

$db->set_charset("utf8");

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "error de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
