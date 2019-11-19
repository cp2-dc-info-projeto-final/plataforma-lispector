<!DOCTYPE html>

<head>

  <meta charset="UTF-8" />

  <title>Cadastro de Alunos</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  <link rel="stylesheet" href="../CSS/Teste.css">

<!-- MENU!--> 
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
					<li><a href="frmLogindeAlunos.php">Login do Aluno</a></li>
          <li><a href="frmLoginProfessor.php">Login do Professor</a></li>
          <li><a href="frmLoginfuncionario.php">Login do Funcionário</a><li>
</ul>      
<li><a href="PáginaDeEnvio.html">Área do Professor</a></li>

    </ul>
    
  </nav>

<!--FINAL DO MENU!--> 

</head>

<body>

      <div id="cadastro">

        <form method="post" action="novocadastro-conexao.php"> 
        
          <h1>Cadastro de Alunos</h1> 

          <p> 
            <label for="nome_cad">Digite seu nome</label>
            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="nome" />
          </p>

          <form method="POST" action="proc_upload.php" >
        Envie sua foto <input name= "arquivo" type= "file">
          <p> 
            <label for="turma_cad">Digite sua turma</label>
            <input id="turms_cad" name="turma_cad" required="required" type="text" placeholder="ex:1103" />
          </p>

          <p> 
            <label for="matricula_cad">Digite seu Matrícula</label>
            <input id="matricula_cad" name="matricula_cad" required="required" type="text" placeholder="ex:M02100361" />
          </p>
           
          <p> 
            <label for="email_cad">Digite Seu e-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
          </p>

          <p> 
            <label for="senha_cad">Crie uma senha</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex: 1234"/>
          </p>

          <p> 
              <label for="senha_cad">Confirme sua senha</label>
              <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex: 1234"/>
            </p>
            
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
           
          <p class="link">  
            Já tem conta?
            <a href="frmLoginAluno.php">Entre!</a>
          </p>
        </form>

       
      </div>
    </div>
  </div>  
</body>
</html>