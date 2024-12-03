<?php
include_once "conexao.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $produtos=$_POST['produtos'];
    $bebidas=$_POST['bebidas'];

    $insert=$con->prepare('INSERT INTO pedidos (produtos,bebidas) VALUES (:produtos, :bebidas)');
    $insert->bindParam('produtos',$produtos);
    $insert->bindParam('bebidas',$bebidas);

    //executar o insert
    if($insert->execute()){
        header('location:index.html');
    }
    else {
        header('location:index.html');
    }
}
?>