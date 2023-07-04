<?php

include_once('config.php');

if (isset( $_POST['update'])) 
{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $sexo = $_POST['sexo'];
    $data = $_POST['nasc'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $end = $_POST['endereco'];

    $sqlUpdate = "UPDATE usuario SET nome = '$nome', senha = '$senha', email = '$email', fone = '$fone', sexo = '$sexo', nasc = '$data', cidade = '$cidade', estado = '$estado', endereco = '$end'  WHERE id = '$id'";

    $result = $con->query($sqlUpdate);

}

header('Location: sistema.php')

?>