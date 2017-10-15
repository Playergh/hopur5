<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur5/chatSystem/db/dbConnect.php';

try
{
    $sql = 'SELECT message_id, username, msg, timestamp, colour FROM chat WHERE message_id >:id AND timestamp >= DATE_SUB(NOW(), INTERVAL 1 HOUR)';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $id);
    $s->execute();
}
catch (PDOException $e)
{
    $error = 'Error fetching message.' . $e->getMessage();
    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur5/chatSystem/error/error.php';
    exit();
}
$result = $s->fetchALL();
foreach ($result as $row)
{
    $chats[] = array('message_id' => $row['id'], 'username' => $row['username'], 'msg' => $row['msg'], 'timestamp' => $row['date'], 'colour' => $row['colour']);
}
?>