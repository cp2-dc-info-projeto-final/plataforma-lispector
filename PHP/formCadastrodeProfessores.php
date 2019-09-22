<html>
<head>
<link rel = "shortcut icon" type = "image/x-icon" href= "../ICO/clispector.ico">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

     <h1 style="background:#ffffff;color:black;padding:10px;text-align: center;">  Cadastro de Professores</h1>

 </head>
         <style>

     	body { background-color: lightskyblue}

       </style>

<body>
	<form method="post" action="../PHP/cadastro_professor.php"><!--liga ao código php-->
	
		<label>Nome: </label><input type="text" name="nome" id="nome"><br><br>
		<label>Email: </label><input type="email" name="email" id="email"><br><br>
		<label>Matrícula: </label><input type="text" name="matricula" id="matricula"><br><br>
		<label>Senha: </label><input type="password" name="senha" id="senha"><br><br>
		<label>Confirmar a Senha: </label><input type="password" name="confirmaSenha" id="confirmaSenha"><br><br>
        <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
    <?php
        session_start();
        if(array_key_exists('erro', $_SESSION) == true){
            $erro = $_SESSION["erro"];
            echo "<br><b>$erro</b>";
            session_unset();
        }
    ?>
    

   <p id="backtoblog"><a href="../HTML/Index.html">Home</a>
    &larr; Voltar para Home</a></p>,
    

</form>

</body>
</html>
