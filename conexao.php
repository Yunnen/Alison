<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "rpg";

try {
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user,$pass);
    //echo "deu bom";
} catch (PDOException $err){
    //echo "Erro".$err->getMessage();
}