<!DOCTYPE html>

<head>

  <meta charset="UTF-8" />

  <title>Perfil do Professor</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 


</head>
<body>
<link rel="stylesheet" href="../CSS/Menu_Index.css">
		
		<ul>
    <li><a href="../HTML/Index.html">Home</a></li>
    
    <li><a href= "../PHP/questoesView.php">Fazer Questões</a></li>      


<?php

error_reporting(0); #oculta erros PHP

$login = $HTTP_SESSION_VARS["login"];
$email = $_GET['email'];

$connection = mysqli_connect("localhost", "root", "", "plataforma-lispector");

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

