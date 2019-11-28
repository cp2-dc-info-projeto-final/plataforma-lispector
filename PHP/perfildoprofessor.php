<link rel="stylesheet" href="../CSS/PerfilDoProfessor.css">

 
 <meta charset="UTF-8" />

 <body background="../IMAGEMS/Topo.";>

  <title>Perfil do Professor</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">  

    <nav  class="menu">

<link rel="stylesheet" href="../CSS/Menu.css">

<ul>
<li><a href="../HTML/Index.html">Home</a></li>
<li> <a href="perfildoprofessor.php">Seu Perfil</a><li>
<li><a href= "../PHP/questoesView.php">Fazer Questões</a></li>
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
  
  </nav>

  <div class="echo">


<?php

error_reporting(0); #oculta erros PHP

$login = $HTTP_SESSION_VARS["login"];
$email = $_GET['email'];

$connection = mysqli_connect("localhost", "root", "", "plataforma_lispector");

$sql = "SELECT * FROM professor WHERE email='$email'";

$result = mysqli_query($connection, $sql);

while($row = $result->fetch_assoc()){

    $nome = $row['nome'];
    $id = $row['id'];
}



echo ("Olá $nome você é o usuário número $id.");

echo ("<BR><BR>Nome: $nome<br>E-mail: $email<br></a>");

?>



      <div id="cadastro">
      </div>
    </div>
  </div>  
</body>
</html>