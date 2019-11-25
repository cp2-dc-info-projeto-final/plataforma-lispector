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


    </ul>
    
  </nav>

<!--FINAL DO MENU!--> 

</head>

<body>

      <div id="cadastro">

        <form method="post" action="codigo_login_aluno.php"> 
        
          <h1>Cadastro de Alunos</h1> 

          <p> 
            <label for="nome_cad">Digite seu nome</label>
            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="nome" />
          </p>

          <p> 
            <label for="email_cad">Digite Seu e-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
          </p>
          
          <p> 
            <label for="matricula_cad">Digite seu Matrícula</label>
            <input id="matricula_cad" name="matricula_cad" required="required" type="text" placeholder="ex:M02100361" />
          </p>

            <label for="turma_cad">Digite sua turma</label>
            <input id="turma_cad" name="turma_cad" required="required" type="text" placeholder="ex:1103" />
          </p>

          <p> 
            <label for="senha_cad">Crie uma senha</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex: 1234"/>
          </p>

          <p> 
              <label for="senha_cad1">Confirme sua senha</label>
              <input id="senha_cad1" name="senha_cad1" required="required" type="password" placeholder="ex: 1234"/>
            </p>
            
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
           
          <p class="link">  
            Já tem conta?
            <a href="formLogindeAlunos.php">Entre!</a>
          </p>
        </form>

       
      </div>
    </div>
  </div>  
</body>
</html>