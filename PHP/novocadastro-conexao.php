<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "plataforma_lispector";
$conexao = mysqli_connect($host, $usuario, $senha) or die(mysql_error());
?>

<?php

$nome=_POST ['nome'];
$enviafoto=_POST ['enviafoto'];
$turma=_POST ['turma'];
$matricula=_POST ['matricula'];
$email=_POST ['email'];
$senha=_POST ['senha'];
$confirmasenha=_POST ['confirmasenha'];

$sql = mysqli_query (INSERT INTO novocadastro(enviofoto, nome, email, turma, matricula, senha, confirmasenha VALUES ('$enviofoto', '$nome', '$email', '$turma', '$matricula','$senha','$confirmasenha'));
?>