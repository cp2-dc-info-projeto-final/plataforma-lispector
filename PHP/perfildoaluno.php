<!DOCTYPE html>

<nav class="menu">

<meta charset="utf-8">


<link rel="stylesheet" href="../CSS/Menu.css">

<ul>
<li><a href="../HTML/Index.html">Home</a></li>
	     <li><a href="formCadastrodeFuncionarios.php">Cadastros</a>
          <ul>
					<li><a href="formCadastrodeFuncionarios.php">Cadastro de Funcionarios</a></li>
          <li><a href="formCadastrodeProfessores.php">Cadastro de Professores</a></li>
          <li><a href="formCadastrodeAlunos.php">Cadastro de Alunos</a><li>
</ul>    
<li><a href="#">Logins</a>
          <ul>
					<li><a href="frmLogindeAlunos.php">Login do Aluno</a></li>
          <li><a href="frmLoginProfessor.php">Login do Professor</a></li>
          <li><a href="frmLoginfuncionario.php">Login do Funcionário</a><li>
</ul>      

    </ul>
    
  </nav>

<head>

  <meta charset="UTF-8"/>

  <title>Perfil do Aluno</title>

  <h1 align ="center"> Perfil do Aluno</h1>


  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 


</head>

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

<body>

      <div id="cadastro">
        <p>deseja trocar a senha?</p>
        <a href=../PHPMailer-5.2/recuperacaosenha.php>trocar senha</a>

        

      </div>
    </div>
  </div>  
</body>
</html>

