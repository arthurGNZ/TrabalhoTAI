<?php
    include "database/bd.php"; 
    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome']; 
    $telefone1 = $_GET['telefone1'];
    $tipo_tel1 = $_GET['tipo_tel1'];
    $telefone2 = $_GET['telefone2'];
    $tipo_tel2 = $_GET['tipo_tel1'];
    $email = $_GET['email'];
    $dados = array( "nome"=>$nome, "sobrenome"=>$sobrenome, "telefone1"=>$telefone1,"tipo_tel1"=>$tipo_tel1,"telefone2"=>$telefone2, "tipo_tel2"=>$tipo_tel2, "email"=>$email);
    $objBD = new BD();
    $objBD->conn();
    $pessoa = $objBD->insert($dados);
    header("Location:formContato.php?nome=$nome&sobrenome=$sobrenome&telefone1=$telefone1&tipo_tel1=$tipo_tel1&tipo_tel2=$tipo_tel2&email=$email");  
?>