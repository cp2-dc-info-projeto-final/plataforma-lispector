<!DOCTYPE html>

<head>

<link rel="stylesheet" href="../CSS/Logins.css" >

<script type="text/javascript" src="../JavaScript/Logins.js"> </script>
<div id="login">

<nav  class="menu">

<link rel="stylesheet" href="../CSS/Menu.css">

<ul>
<li><a href="../HTML/Index.html">Home</a></li>
<li><a href="formCadastrodeProfessores.php">Cadastros</a>
          <ul>
          <li><a href="formCadastrodeProfessores.php">Cadastro de Professores</a></li>
          <li><a href="formCadastrodeAlunos.php">Cadastro de Alunos</a><li>
</ul>
<li><a href="#">Logins</a>
          <ul>
					<li><a href="formLogindeAlunos.php">Login do Aluno</a></li>
          <li><a href="frmLoginProfessor.php">Login do Professor</a></li>

    
  </nav>

  <meta charset="UTF-8"/>

  <title>Perfil do Aluno</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

</head>

<div id="echo">

<?php


error_reporting(0); #oculta erros PHP

$login = $HTTP_SESSION_VARS["login"];
$email = $_GET['email'];

$connection = mysqli_connect("localhost", "root", "", "plataforma_lispector");

$sql = "SELECT * FROM alunos WHERE email='$email'";

$result = mysqli_query($connection, $sql);

while($row = $result->fetch_assoc()){

    $nome = $row['nome'];
    $id = $row['id'];
    $turma = $row['turma'];
}


 echo ("Olá $nome Você é o usuário número: $id."); 

 echo ("<BR><BR>Nome: $nome<br>E-mail: $email<br>Turma: $turma<Br></a>"); 

?>

      <div id="cadastro">
        <p>Deseja trocar a senha?</p>
        <a href=recuperacaosenha.php>Trocar senha</a>

        

      </div>
    </div>
  </div>  
</body>
</html>

