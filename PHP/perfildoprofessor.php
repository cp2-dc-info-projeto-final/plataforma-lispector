<!DOCTYPE html>

<head>

  <meta charset="UTF-8" />

  <title>Perfil do Professor</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 


</head>

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

<body>

      <div id="cadastro">
      <a href= "../PHP/questoesView.php">Fazer Questões</a>      

      </div>
    </div>
  </div>  
</body>
</html>

