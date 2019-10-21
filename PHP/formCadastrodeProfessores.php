<html>
<head>
<link rel = "shortcut icon" type = "image/x-icon" href= "../ICO/clispector.ico">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

     <h1 style="background:#ffffff;color:black;padding:10px;text-align: center;">  Cadastro de Professores</h1>
     <meta charset="UTF-8" />

<title>Formulário de Login</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<link href="http://127.0.0.1:8080/edsa-plataforma-lispector/CSS/LoginProfessor.css"  type="text/css" rel="stylesheet" >

 </head>
      

<body>
<div id="menu">
        <a href="../HTML/Index.html">Home</a>
            &nbsp
    
           <a href="../HTML/FormLoginDoProfessor.php">Login do Professor</a>
            &nbsp
    
          <a href="../HTML/FormLoginDoAluno.php">Login do Aluno</a>
            &nbsp
            <a href="../PHP/formCadastrodeProfessores.php">Cadastro de Professores</a>
            &nbsp
            <a href="../PHP/formCadastrodeAlunos.php">Cadastro de Alunos</a>
            &nbsp
            <a href="../HTML/Contatos.html">Contatos</a>
        </div>
        <br><br>
        <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    <a class="links" id="parahome"></a>
     
    <div class="content">   

     <!--FORMULÁRIO DE LOGIN-->

     <div id="login">

      <form method="post" action=""> 

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
      <form method="post" action="cadastro_professor.php"> 
        <h1>Cadastro</h1> 
         
        <p> 
          <label for="nome_cad">Digite seu nome</label>
          <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="nome" />
        </p>
         
        <p> 
          <label for="email_cad">Digite Seu e-mail</label>
          <input id="email_cad" name="email_cad" required="required" type="email" placeholder="example@example.com"/> 
        </p>
        <p> 
          <label for="matricula_cad">Sua Matrícula</label>
          <input id="matricula_cad" name="matricula_cad" required="required" type="text" placeholder="matricula" />
        </p>
        <p> 
          <label for="turma_cad">Digite Sua Turma</label>
          <input id="turma_cad" name="turma_cad" required="required" type="text" placeholder="turma" />
        </p>
      
        <p> 
          <label for="senha_cad">Crie uma senha</label>
          <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234"/>
        </p>
        <p> 
          <label for="senha_cad">Confirme sua senha</label>
          <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234"/>
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
     <p id="backtoblog"><a href="../HTML/Index.html">Home</a>
    &larr; Voltar para Home</a></p>,
    

</form>

</body>
</html>
