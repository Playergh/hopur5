<?php
try
{
    $pdo = new PDO('mysql:host=skolahysing.com;dbname=hopur5', 'hopur5', 'hestur');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include 'error.php';
    exit();
}
?>