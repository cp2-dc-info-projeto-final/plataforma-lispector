<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "plataforma_lispector";

$mysqli = new mysqli ($host, $usuario, $senha, $bd);

if ($mysqli->connect_errno) {

echo "Falha na Conexão:" . $mysqli->connect_errno . $mysqli->CONNECT_ERROR;

}

?>