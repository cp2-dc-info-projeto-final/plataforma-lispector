<?php

$nome = $_POST['nome'];
$disciplina = $_POST['disciplina'];
$pergunta = $_POST['pergunta'];
$pergunta2 = $_POST['pergunta2'];
$pergunta3 = $_POST['pergunta3'];

$connection = mysqli_connect("localhost", "root", "", "plataforma_lispector");

if (mysqli_connect_error($connection)) { // Retorna uma string descrevendo o ultimo erro da função connect

    echo "Erro de conexão"; // Mensagem que aparecerá, caso haja o erro.
}
else {
    echo "Conexão OK!";  // Mensagem que aparecerá, caso dê certo!
}

$sql = "SELECT id_questao FROM questao";
$result = mysqli_query($connection, $sql);
$erro = "";

$sql = "INSERT INTO questao (nome, disciplina, pergunta, pergunta2, pergunta3, resposta) VALUES ('$nome', '$disciplina', '$pergunta', '$pergunta2', '$pergunta3', '$resposta')";

if(mysqli_query($connection, $sql)){
    header("Location: formQuestoesRecebidas.php");
} else{
    echo "ERRO: NÃO FOI POSSÍVEL CONECTAR AO BANCO DE DADOS." . mysqli_error($connection);
}
mysqli_close($connection);

?>