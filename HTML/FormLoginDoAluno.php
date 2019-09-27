<!DOCTYPE html>

<html>

<head>
    <link rel = "shortcut icon" type = "image/x-icon" href= "../ICO/clispector.ico">
    <meta charset="UTF-8">
    <title>Login Aluno</title>

</head>

<body>

  <h1 style="background:#ffffff;color:black;padding:10px;text-align: center;">Login do Aluno</h1>

  <div id="menu">
        <a href="Index.html">Home</a>
            &nbsp
    
           <a href="FormLoginDoProfessor.php">Login do Professor</a>
            &nbsp
    
          <a href="FormLoginDoAluno.php">Login do Aluno</a>
            &nbsp
            <a href="../PHP/formCadastrodeProfessores.php">Cadastro de Professores</a>
            &nbsp
            <a href="../PHP/formCadastrodeAlunos.php">Cadastro de Alunos</a>
            &nbsp
            <a href="Contatos.html">Contatos</a>
        </div>
        <br><br>

  <form action="../PHP/loginAluno.php" method="post">

    <label for="uname"><b>Email:</b></label>      &nbsp &nbsp &nbsp

    <input type="text" placeholder="Digite seu Email" name="uname" required>
    <br>

              

 <label for="uname"><b>Senha:</b></label>              
  &nbsp &nbsp &nbsp

    <input type="password" placeholder="Digite sua Senha" name="uname" required> <br>
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

     <input type="checkbox" checked="checked" name="remember"> Lembrar Senha
  
 <p><input type="submit" value="Enviar"></button></p>
 <?php
        session_start();
        if(array_key_exists('erro', $_SESSION) == true){
            $erro = $_SESSION["erro"];
            echo "<br><b>$erro</b>";
            session_unset();
        }
    ?>

 <a href="#">Esqueceu a Senha?</a><br>

 <a href="../PHP/formCadastrodeAlunos.php">Cadastre-se!</a>



    <p id="backtoblog"><a href="index.html">Home</a>
    &larr; Voltar para Home</a></p>
    
  
  <style> 

  body {background-color:lightskyblue}

</style>
</form>
</body>
</html>