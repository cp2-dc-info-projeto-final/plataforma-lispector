<html>

<nav  class="menu">

<link rel="stylesheet" href="../CSS/Menu.css">

<ul>
<li><a href="../HTML/Index.html">Home</a></li>
	     <li><a href="formCadastrodeFuncionarios.php">Cadastros</a>
          <ul>
					<li><a href="formCadastrodeFuncionarios.php">Cadastro de Funcionarios</a></li>
          <li><a href="formCadastrodeProfessores.php">Cadastro de Professores</a></li>
          <li><a href="formCadastrodeAlunos.php">Cadastro de Alunos</a><li>
</ul>    
<li><a href="#">Logins</a>
          <ul>
					<li><a href="frmLoginAluno.php">Login do Aluno</a></li>
          <li><a href="frmLoginProfessor.php">Login do Professor</a></li>
          <li><a href="frmLoginfuncionario.php">Login do Funcionário</a><li>
</ul>      
<li><a href="PáginaDeEnvio.html">Área do Professor</a></li>

    </ul>
    
  </nav>
  
<head>

<link rel = "shortcut icon" type = "image/x-icon" href= "../ICO/clispector.ico">

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

     
     <meta charset="UTF-8" />


<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<link rel="stylesheet" href="../CSS/Menu.css">

 </head>
    
<body>
<div id="menu">
        
        <br><br>
        <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    <a class="links" id="parahome"></a>
     
    <div class="content">   

     <!--FORMULÁRIO DE LOGIN-->

     <div id="login">

      <form method="post" action="loginaluno.php"> 

        <h1>Login</h1> 
                 
        <p> 
          <label for="email_login">Digite Seu e-mail</label>
          <input id="email_login" name="email_login" required="required" type="text" placeholder="example@example.com" /> 
        </p>
         
        <p> 
          <label for="senha_cad">Digite sua senha</label>
          <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234"/>
        </p>
         
        <p> 
          <input type="submit" value="Logar" /> 
        </p>
         
        <p class="link">
          Ainda não tem conta?
          <a href="#paracadastro">Cadastre-se</a>
        </p>

      </form>


    </div>

    <!--FORMULÁRIO DE CADASTRO-->

    <div id="cadastro">

      <form method="post" action="codigo_cadastro_professores.php"> 
         
        <p> 
          <label for="nome">Digite seu nome</label>
          <input id="nome" name="nome" required="required" type="text" placeholder="nome" />
        </p>
         
        <p> 
          <label for="email">Digite Seu e-mail</label>
          <input id="email" name="email" required="required" type="email" placeholder="example@example.com"/> 
        </p>
        <p> 
          <label for="matricula">Sua Matrícula</label>
          <input id="matricula" name="matricula" required="required" type="text" placeholder="matricula" />
        </p>
        <p> 
            <label for="turma">Sua Turma</label>
            <input id="turma" name="turma" required="required" type="text" placeholder="turma" />
          </p>
         <p> 
          <label for="senha">Crie uma senha</label>
          <input id="senha" name="senha" required="required" type="password" placeholder="ex. 1234"/>
        </p>
        <p> 
          <label for="confirmaSenha">Confirme sua senha</label>
          <input id="confirmaSenha" name="confirmaSenha" required="required" type="password" placeholder="ex. 1234"/>
        </p>
         
        <p> 
          <input type="submit" value="Cadastrar"/> 
        </p>
         
           
          <p class="link">  
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
          </p>

        </form>

      </div>

    </div>

  </div>

    <?php
        session_start();
        if(array_key_exists('erro', $_SESSION) == true){
            $erro = $_SESSION["erro"];
            echo "<br><b>$erro</b>";
            session_unset();
        }
    ?>
     

</form>

</body>
</html>

