<?php
$resposta = $_POST['resposta'];

$connection = mysqli_connect("localhost", "root", "", "plataforma_lispector");

if (mysqli_connect_error($connection)) { // Retorna uma string descrevendo o ultimo erro da função connect

    echo "Erro de conexão"; // Mensagem que aparecerá, caso haja o erro.
}
else {
    echo "Conexão OK!";  // Mensagem que aparecerá, caso dê certo!
}

$sql = "SELECT id_resposta FROM resposta";
$result = mysqli_query($connection, $sql);
$erro = "";

$sql = "INSERT INTO resposta (resposta) VALUES ('$resposta')";

if(mysqli_query($connection, $sql)){
    echo "RESPOSTAS ENVIADAS! Acesse o gabarito.";
} else{
    echo "ERRO: NÃO FOI POSSÍVEL CONECTAR AO BANCO DE DADOS." . mysqli_error($connection);
}
mysqli_close($connection);

?>