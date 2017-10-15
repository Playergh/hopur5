<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur5/chatSystem/db/dbConnect.php';
try
{
    $sql = 'INSERT INTO chat 
              SET 
              username = :name,
              msg = :msg,
              timestamp = NOW(),
              color = :color';
    $s = $pdo->prepare($sql);
    $s->bindValue(':name', $_SESSION['username']);
    $s->bindValue(':msg', $message);
    $s->bindValue(':color', $_SESSION['color']);
    $s->execute();
}
catch (PDOException $e)
{
    $error = 'Error adding submitted message.' . $e->getMessage();
    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur5/chatSystem/error/error.php';
    exit();
}
?>