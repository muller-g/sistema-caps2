<?php 
require_once("conexao.php"); 

$n_pedido = $_GET["npedido"];
$n_cliente = $_GET["nclient"];
$data_pedido = $_GET["datapedido"];
$n_bones = $_GET["nbones"];

$sql = "INSERT INTO pedidos (pedido, cliente, datapedido, qtd) VALUES (?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$n_pedido, $n_cliente, $data_pedido, $n_bones]);

header("Location: ../index.php");
$conn=null;
die();
?>