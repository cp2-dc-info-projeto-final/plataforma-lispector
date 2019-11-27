<!DOCTYPE html>

<head>

  <meta charset="UTF-8" />

  <title>Perfil do Funcionario</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 


</head>

<?php

error_reporting(0); #oculta erros PHP

$login = $HTTP_SESSION_VARS["login"];
$email = $_GET['email'];

$connection = mysqli_connect("localhost", "root", "", "plataforma-lispector");

$sql = "SELECT * FROM funcionario WHERE email='$email'";

$result = mysqli_query($connection, $sql);

while($row = $result->fetch_assoc()){

    $nome = $row['nome'];
    $id = $row['id'];
    $email = $row['email'];
}



echo ("Olá $nome você é o usuário número $id.");

echo ("<BR><BR>Nome: $nome<br>E-mail: $email<br></a>");

?>

<body>

      <div id="cadastro">
      
      <link rel="stylesheet" href="../CSS/Menu.css">

<ul>
<li><a href="../HTML/Index.html">Home</a></li>
	     <li><a href="formCadastrodeFuncionarios.php">Cadastros</a>
          <ul>
					<li><a href="formCadastrodeFuncionarios.php">Cadastro de Funcionarios</a></li>
          <li><a href="formCadastrodeProfessores.php">Cadastro de Professores</a></li>
          <li><a href="formCadastrodeAlunos.php">Cadastro de Alunos</a><li>
</ul>    

      </div>
    </div>
  </div>  
</body>
</html>

