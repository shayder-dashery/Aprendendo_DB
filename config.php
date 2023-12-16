<?php

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $cpf = $_POST['CPF'];
        $senha = $_POST['senha'];
        $check_senha = $_POST['check_senha'];
    }

    if($senha != $check_senha){
        die("As senhas não correspondem.");
    }

    $host = "localhost";
    $banco = "formularioteste";
    $user = "root";
    $senha_user = "";

    $con = mysqli_connect($host, $user, $senha_user, $banco);

    if(!$con){
        die("Conexão Falhou." . mysqli_connect_error());
    }

    $sql = "INSERT INTO Clientes (Nome, CPF, Senha) VALUES('$nome', '$cpf', '$senha')";

    $rs = mysqli_query($con, $sql);

    if($rs){
        echo "Cadastro Conluído!";
    }
?>