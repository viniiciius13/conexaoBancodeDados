<?php
session_start();
    require_once("servidor.php");
    if (isset($_GET['enviar'])){
        if (!empty($_GET['nomeproduto']) || !empty($_GET['preco']) || !empty($_GET['codigo'])) {
            $nome=$_GET['nomeproduto'];
            $preco=$_GET['preco'];
            $codigo=$_GET['codigo'];

            $comando="INSERT INTO produtos(nome, preco, codigo) VALUES ('$nome', '$preco', '$codigo')";
            $enviar=mysqli_query($conn, $comando);

            if ($enviar) {
                $_SESSION['mensagem']="Produto Cadastrado";
                header("location:index.php");
                exit;
            }
            else{
                $_SESSION['mensagem']="Erro ao Cadastrar Produto";
                header("location:index.php");
                exit; 
            }
        }
    }

?>