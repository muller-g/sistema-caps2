<?php 
require_once("conexao.php"); 

$item_id = $_GET["id"];

if(isset($item_id) && $item_id != ""){
    $stmt = $conn->query("SELECT * FROM pedidos WHERE pedido = '$item_id'");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $pedido = $row['pedido'];
            $cliente = $row['cliente'];
            $data_pedido = $row['datapedido'];
            $qtd = $row['qtd'];
        }
}

$sql = "INSERT INTO deletados (pedido, cliente, datapedido, qtd) VALUES (?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$pedido, $cliente, $data_pedido, $qtd]);

require_once("removeItem.php");

header("Location: ../index.php");
$conn=null;

die();

?>