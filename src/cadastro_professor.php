<?php
$nome = $_POST['nome'];
$senha = $_POST['senha']; // aumentar campo  no banco para usar o MD5
//$senha = MD5($_POST['senha']);
$Email = $_POST['email'];
$matricula = $_POST['matricula'];

$link = mysqli_connect("localhost", "root", "", "professor2");
 
// Check connection
if($link === false){
    die("ERRO: NÃO FOI POSSÍVEL CONECTAR." . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO professor(nome,matricula,email,senha) VALUES ('$nome', '$matricula', '$Email', '$senha')";
if(mysqli_query($link, $sql)){
    echo "DADOS INSERIDOS COM SUCESSO.";
} else{
    echo "ERRO: NÃO FOI POSSÍVEL CONECTAR AO $sql." . mysqli_error($link);
}

mysqli_close($link);
?>
