<?php



$connection = mysqli_connect("localhost", "root", "", "plataforma_lispector");

if (mysqli_connect_error($connection)) { // Retorna uma string descrevendo o ultimo erro da função connect

    echo "Erro de conexão"; // Mensagem que aparecerá, caso haja o erro.
}
else {
    echo "Agora que as respostas foram enviadas, acabou. Pode fechar essa janela!";  // Mensagem que aparecerá, caso dê certo!
}

$sql = "SELECT id_resposta FROM resposta";
$result = mysqli_query($connection, $sql);
$erro = "";


if(mysqli_query($connection, $sql)){

    echo '<script>alert("Respostas Enviadas. Sua nota chegará por e-mail ou o professor falará em sala de aula!");</script>'; }
 else{
    echo "ERRO: NÃO FOI POSSÍVEL CONECTAR AO BANCO DE DADOS." . mysqli_error($connection);
}
mysqli_close($connection);

?>