<!DOCTYPE html>

<html>

<head>
  <link rel = "shortcut icon" type = "image/x-icon" href= "../ICO/clispector.ico">
  <meta charset="UTF-8">

<body>
	<h1 style="background:#ffffff;color:black;padding:10px;text-align: center;">Login do Professor</h1>

 <label for="uname"><b>Email:</b></label>      &nbsp &nbsp &nbsp

    <input type="text" placeholder="Digite seu Email" name="uname" required>
    <br>


 <label for="uname"><b>Senha:</b></label>              

  &nbsp &nbsp 

    &nbsp <input type="password" placeholder="Digite sua Senha" name="uname" required>

    <br>

   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
    <input type="checkbox" checked="checked" name="remember"> Lembrar Senha<br>
    <br>

   &nbsp &nbsp &nbsp <h4><button type="button" class="cancelbtn">Entrar</button><br><br>
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

</style>
</head>
</body>
</html>