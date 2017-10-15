<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/nemendur/hopur5/chatSystem/db/dbConnect.php";
try{
    $sql = "INSERT INTO members
              SET
              username = :name,
              password = :pass";
    $s = $pdo -> prepare($sql);
    $s -> bindValue(":name", $_SESSION["username"]);
    $s -> bindValue(":pass", $_SESSION["password"]);
}
catch (PDOException $e){
    $error = "Error creating user." . $e -> create_user();
    include_once $_SERVER["DOCUMENT_ROOT"] . "/nemendur/hopur5/chatSystem/error/error.php";
    exit();
}
?>