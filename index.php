<?php 
session_start();
    require_once("servidor.php");
    if(!empty($_SESSION['mensagem'])){
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    }
?>

 <form action="listar.php" method="get" accept-charset="utf-8">
    Nome do Produto<input type="text" name="nomeproduto"><br>
    Preço do Produto <input type="text" name="preco"><br>
    Código do Produto<input type="number" name="codigo"><br>
    <input type="submit" name="enviar">
 </form>

 <a href="lista.php">Lista de Produtos</a>