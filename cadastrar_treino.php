<?php
// include: ele inclui e avalia o arquivo informado. //
    include('conexao.php');
//------------------------------------------//
    $nome = $_POST['nome'];
//------------------------------------------//
    $descricao = $_POST['descricao'];
//------------------------------------------//
    $comando = $pdo->prepare("INSERT INTO treinos(nome_treino, descricao_treino) VALUES(:nome,:descricao)");
//------------------------------------------//
    $comando->bindValue(":nome",$nome);
    $comando->bindValue(":descricao",$descricao);
//------------------------------------------//
    $comando->execute();
//------------------------------------------//
    header("Location:tela_cadastro_treinos.php");
//------------------------------------------//
    unset($comando);
    unset($pdo);
?>