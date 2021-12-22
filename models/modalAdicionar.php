<div class="modal">
    <div class="modal-container">
        <form action="backend/addPedido.php" method="get">
            <p>Cadastrar Pedido</p>
            <div class="first-line">
                <input type="text" name="npedido" id="npedido" placeholder="Pedido">
                <input type="text" name="nclient" id="ncliente" placeholder="Cliente">
            </div>
            <div class="second-line">
                <input type="date" name="datapedido" id="datapedido">
                <input type="number" name="nbones" id="nbones" placeholder="00">
            </div>
            <div class="btn-modal">
                <input type="submit" value="Cadastrar" id="submit">
                <a href="#" class="cancel">Cancelar</a>
            </div>
        </form>
    </div>
</div>