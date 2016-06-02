<?php

try{
    //Carregar conexão com o banco de dados
    require_once './conexao.php';

    //Verificar se existe o id do pais no get
    if(!isset($_GET['pais_id']))
        throw new Exception("Nenhum id de país foi enviado!");

    //Query para buscar todos os países
    $query = "SELECT * FROM pais WHERE pais_id = :pais_id";

    //Preparar a query com PDO
    $p_sql = $pdo->prepare($query);

    //Verificação para evitar SQL Injection
    $p_sql->bindValue(":pais_id", $_GET['pais_id']);

    //Realizar busca dos países
    $p_sql->execute();

    //Trazer lista de países num array
    $dado = $p_sql->fetch(PDO::FETCH_ASSOC);

} catch (Exception $e){
    //Tornar lista de países vazia
    $dado = array();
    //Guardar mensagem de erro numa variavel
    $error = $e->getMessage();
}