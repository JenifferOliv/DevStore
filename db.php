<?php
//variavel para o servidor do banco
$host="localhost";
//senha do usuario
$user="root";
//nome do banco
$password = "";
$dbname = "DEVstore";
//tenta conectar ao banco
try{
    $pdo = new PDO("mysql:$host;dbname=$dbname);charset=utf-8;", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    die("Falha na conexão: ". $e->getMessage());
}
?>