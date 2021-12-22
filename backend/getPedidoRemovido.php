<?php 
require_once("conexao.php"); 
error_reporting(0);

$today = date("Y-m-d");
$filter = $_GET["datafiltro"];

if(isset($filter) && $filter != ""){
    $stmt = $conn->query("SELECT * FROM deletados WHERE datapedido = '$filter' ORDER BY datapedido ASC");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['pedido'];
            echo "<tr>";
                echo "<td>".$row['pedido']."</td>";
                echo "<td>".$row['cliente']."</td>";
                echo "<td>".date('d-m-Y', strtotime($row['datapedido']))."</td>";
                echo "<td class='qtd-bones'>".$row['qtd']."</td>";
                echo "<td><a href='backend/removeItemBack.php?id=$id' class='btn-remove'>X</a></td>";
            echo "</tr>";
    }
} else {
    $stmt = $conn->query("SELECT * FROM deletados ORDER BY datapedido ASC");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['pedido'];
        echo "<tr>";
            echo "<td>".$row['pedido']."</td>";
            echo "<td>".$row['cliente']."</td>";
            echo "<td>".date('d-m-Y', strtotime($row['datapedido']))."</td>";
            echo "<td class='qtd-bones'>".$row['qtd']."</td>";
            echo "<td><a href='backend/removeItemBack.php?id=$id' class='btn-remove'>X</a></td>";
        echo "</tr>";
    }
}

$conn=null;
?>