<!DOCTYPE html>

<html>

<head>
  <link rel = "shortcut icon" type = "image/x-icon" href= "../ICO/clispector.ico">
  <meta charset="UTF-8">

<body>
  <h1 style="background:#ffffff;color:black;padding:10px;text-align: center;">Login do Professor</h1>

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
  
<form action="../PHP/loginProfessor.php" method="post">
 <label for="uname"><b>Email:</b></label>      &nbsp &nbsp &nbsp

    <input type="email" placeholder="Digite seu Email" name="uname" required>
    <br>


 <label for="uname"><b>Senha:</b></label>              

  &nbsp &nbsp 

    &nbsp <input type="password" placeholder="Digite sua Senha" name="uname" required>

    <br>

   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
    <input type="checkbox" checked="checked" name="remember"> Lembrar Senha<br>
    <br>

   &nbsp &nbsp &nbsp <h4><button type="button" class="sendbtn">Entrar</button><br><br>
   <?php
        session_start();
        if(array_key_exists('erro', $_SESSION) == true){
            $erro = $_SESSION["erro"];
            echo "<br><b>$erro</b>";
            session_unset();
        }
    ?>


    </label>
    <a href="#">Esqueceu a Senha</a><br><br>

    <a href="../PHP/formCadastrodeProfessores.php">Ainda não é cadastrado?<br>Cadastre-se!</a><br>
      </form>

    <p id="backtoblog"><a href="index.html">Home</a>
    &larr; Voltar para Home</a></p>
    
  
  <style> 

  body {background-color:lightskyblue}

</style>
</head>
</body>
</html>