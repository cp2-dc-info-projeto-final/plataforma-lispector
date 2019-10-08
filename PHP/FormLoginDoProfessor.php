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

   &nbsp &nbsp &nbsp <input type="submit" value="Entrar" id="entrar" name="entrar"><br><br>
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
   

    <p id="backtoblog"><a href="index.html">Home</a>
    &larr; Voltar para Home</a></p>
    
  
  <style> 

  body {background-color:lightskyblue}
  div {
    border: 20px solid white; /* Tamanho  (Em píxels) e Cor da Borda do Artigo */
  margin: 20px; /* Tamanho (Em píxels) e Cor da Margem do Artigo */
  padding: 20px; /* Tamanho (Em píxels) do Preenchimento do Artigo */
  background-color: lightskyblue; /* Cor de Fundo */  
}

</style>
</form>
</head>
</body>
</html>