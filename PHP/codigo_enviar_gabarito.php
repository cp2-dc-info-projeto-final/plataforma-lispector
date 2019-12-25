<?php
$pergunta1 = $_POST['pergunta1'];
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

$sql = "INSERT INTO questao (pergunta1, pergunta2, pergunta3) VALUES ('$pergunta1', '$pergunta2', '$pergunta3')";

if(mysqli_query($connection, $sql)){

    echo '<script>alert("Gabarito Enviado");</script>'; }
 else{
    echo "ERRO: NÃO FOI POSSÍVEL CONECTAR AO BANCO DE DADOS." . mysqli_error($connection);
}
mysqli_close($connection);

?>