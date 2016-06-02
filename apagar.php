<?php

try{
    //Carregar conexão com o banco de dados
    require_once './conexao.php';

    //Verificar se existe o id do pais no get
    if(!isset($_GET['pais_id']))
        throw new Exception("Nenhum id de país foi enviado!");

    //Query para apagar pais
    $query = "DELETE FROM pais WHERE pais_id = :pais_id";

    //Preparar a query com PDO
    $p_sql = $pdo->prepare($query);

    //Verificação para evitar SQL Injection
    $p_sql->bindValue(":pais_id", $_GET['pais_id']);

    //Realizar exclusão do pais
    $p_sql->execute();

    //Redirecionar para a página principal
    header("Location: index.php");

} catch (Exception $e){
    //Mostrar mensagem de erro caso existir
    echo $e->getMessage();
}

exit();