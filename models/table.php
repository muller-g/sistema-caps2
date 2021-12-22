<div class="container_right">
    <?php  
        error_reporting(0);
        $today = date("Y-m-d");
        $filter = $_GET["datafiltro"];
        $deletados = $_GET["deletados"];
        
        if(isset($filter) && $filter != ""){  
            echo "<h1>Pedidos do dia ".date('d-m-Y', strtotime($filter))."</h1>";   
        } else {
            echo "<h1>Hoje é dia ".date('d-m-Y', strtotime($today))."</h1>";
        }?>
    <div class="table_container">
        <table>
            <tr>
                <th>Pedido</th>
                <th>Cliente</th>
                <th>Data Entrega</th>
                <th>QTD</th>
                <th>Deletar</th>
            </th>
            <?php
            if(isset($deletados) && $deletados==true){
                require_once("backend/getPedidoRemovido.php");
            } else {
                require_once("backend/getPedido.php"); 
            }
            
            ?>
        </table>
    </div>
</div>