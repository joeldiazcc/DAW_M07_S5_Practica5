<?php
// Conexió a la Data Base con PDO
$db_host = "localhost";
$db_name = "productdb";
$db_user = "root";
$db_passwd = "";

try {
    $connect_PDO = new PDO ($db_host, $db_user, $db_passwd, $db_name);
} catch (Exception $e) {
    die("Database connection failed: " . $e->GetMessage());
}
?>