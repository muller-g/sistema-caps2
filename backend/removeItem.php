<?php 
require_once("conexao.php"); 

$item_id = $_GET["id"];

$sql = "DELETE FROM pedidos WHERE pedido=$item_id";
$stmt = $conn->prepare($sql);
$stmt->execute();

header("Location: ../index.php");
$conn=null;

die();

?>