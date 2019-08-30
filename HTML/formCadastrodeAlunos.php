
<!DOCTYPE html>

<html>

<head>
<link rel = "shortcut icon" type = "image/x-icon" href= "../ICO/clispector.ico">
<meta charset="UTF-8">

</head>

 <style> 

     	body { background-color: #ccf2ff}

     </style>

<body>
		<h1 style="background:#ffffff;color:black;padding:10px;text-align: center;">Cadastro de Alunos</h1>	
	<form method="post" action="../PHP/cadastro_alunos.php"><!--liga ao código php-->
		
		<label>Nome:</label><input type="text" name="nome" id="nome"><br><br>
		<label>Email:</label><input type="text" name="email" id="email"><br><br>
		<label>Matrícula:</label><input type="text" name="matricula" id="matricula"><br><br>
        <label>Turma:</label><input type="text" name="turma" id="turma"><br><br>
		<label>Senha:</label><input type="password" name="senha" id="senha"><br><br>
	    <label>Confirmar a Senha:</label><input type="password" name="confirmaSenha" id="confirmaSenha"><br><br>
		<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
    <?php
        session_start();
        if(array_key_exists('erro', $_SESSION) == true){
            $erro = $_SESSION["erro"];
            echo "<br><b>$erro</b>";
            session_unset();
        }
    ?>
    
    <a href="AreadoAluno.html">Entrar

    	 <p id="backtoblog"><a href="index.html">Home</a>
    &larr; Voltar para Home</a></p>
    
</form>
</body>
</body>
</html>

