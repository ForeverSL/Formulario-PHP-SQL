<?php

$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "empresa";

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno)
{
    echo "Erro";
}
else
{
    echo "Registro enviado para o banco de dados!";
}