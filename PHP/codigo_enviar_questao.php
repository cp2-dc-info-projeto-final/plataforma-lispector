<?php

$nome = $_POST['nome'];
$disciplina = $_POST['disciplina'];
$pergunta1 = $_POST['pergunta1'];
$pergunta2 = $_POST['pergunta2'];
$pergunta3 = $_POST['pergunta3'];

$connection = mysqli_connect("localhost", "root", "", "plataforma_lispector");

if (mysqli_connect_error($connection)) { // Retorna uma string descrevendo o ultimo erro da função connect

    echo "Erro de conexão"; // Mensagem que aparecerá, caso haja o erro.
}
else {
    header("Location: ../PHP/formGabaritoParaEnviar.php");

}

$sql = "SELECT id_questao FROM questao";
$result = mysqli_query($connection, $sql);
$erro = "";

$sql = "INSERT INTO questao (nome, disciplina, pergunta1, pergunta2, pergunta3) VALUES ('$nome', '$disciplina', '$pergunta1', '$pergunta2', '$pergunta3')";

if(mysqli_query($connection, $sql)){

    echo '<script>alert("Questões Enviadas");</script>'; }
 else{
    echo "ERRO: NÃO FOI POSSÍVEL CONECTAR AO BANCO DE DADOS." . mysqli_error($connection);
}
mysqli_close($connection);

?>