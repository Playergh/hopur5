<?php
    session_start();
    $message = htmlspecialchars( $_GET['chattext'] );
    require_once( "../db/insertMessage.php" );
?>