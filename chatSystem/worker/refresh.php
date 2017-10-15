<?php
    $id = intval($_GET['lastTimeID']);
    error_log($id);
    require_once( "../db/getMessage.php" );
    echo json_encode($chats);
?>