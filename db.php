<?php
$host = 'localhost';
$dbname = 'dbmlttan2gxeas';
$username = 'u9lvfenc0ixyv';
$password = 'vnggpsky9ix3';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
