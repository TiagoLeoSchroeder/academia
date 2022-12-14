<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];

    //comando sql.
    $comando = $pdo->prepare("UPDATE treino SET nome_treino = :nome, descricao_treino = :descricao WHERE pk_treino = :codigo;");

    //insere valores das variaveis no comando sql.
    //bindValue: Para realizar a definição do valor de um parâmetro, esse método pode receber como argumento tanto uma referência como um valor direto.
    $comando->bindValue(':codigo',$codigo);
    $comando->bindValue(':nome',$nome);
    $comando->bindValue(':descricao',$descricao);

    //executa a consulta no banco de dados.
    $comando->execute();

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);

    header("location:tela_cadastro_treinos.php");
?>