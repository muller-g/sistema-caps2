<?php
$host = 'localhost';
$dbname = 'sistemacaps';
$username = 'root';
$password = '';
 
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
    die("Não foi possível se conectar ao banco de dados $dbname :" . $pe->getMessage());
}