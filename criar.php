<?php

try{
    //Carregar conexão com o banco de dados
    require_once './conexao.php';

    //Verificar se existe o nome do pais no post
    if(!isset($_POST['nome_pais']))
        throw new Exception("Nenhum nome de país foi enviado!");

    //Query para adicionar novo pais
    $query = "INSERT INTO pais (pais, ultima_atualizacao) VALUES (:pais, :ultima_atualizacao)";

    //Preparar a query com PDO
    $p_sql = $pdo->prepare($query);

    //Verificação para evitar SQL Injection
    $p_sql->bindValue(":pais", $_POST['nome_pais']);
    $p_sql->bindValue(":ultima_atualizacao", date('Y-m-d H:i:s'));

    //Realizar inserção do novo pais
    $p_sql->execute();

    //Redirecionar para a página principal
    header("Location: index.php");

} catch (Exception $e){
    //Mostrar mensagem de erro caso existir
    echo $e->getMessage();
}

exit();