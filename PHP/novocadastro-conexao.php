<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "plataforma_lispector";
$connection = mysqli_connect("localhost", "root", "", "plataforma_lispector");
?>

<?php

$nome=$_POST ['nome_cad'];
#$enviafoto=$_POST ['enviafoto'];
$turma=$_POST ['turma_cad'];
$matricula=$_POST ['matricula_cad'];
$email=$_POST ['email_cad'];
$senha=$_POST ['senha_cad'];
$confirmasenha=$_POST ['senha_cad1'];

$sql = mysqli_query ($connection, "INSERT INTO alunos( nome, email, turma, matricula, senha) VALUES ('$nome', '$email', $turma, '$matricula','$senha')");
// Check connection
if($sql === false){
    die("Erro de Conexão" . mysqli_connect_error());
    header('Location:../HTML/Index.html');
  
}
else{
    
    header('Location:formLogindeAlunos.php');
}
?>