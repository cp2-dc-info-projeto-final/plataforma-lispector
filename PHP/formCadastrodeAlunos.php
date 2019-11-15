<!DOCTYPE html>

<head>

  <meta charset="UTF-8" />

  <title>Cadastro de Funcionários</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  <link rel="stylesheet" href="../CSS/Teste.css">


</head>

<body>

      <div id="cadastro">
        <form method="post" action=""> 
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
            <a href="frmLoginAluno.php">Entre!</a>
          </p>
        </form>
      </div>
    </div>
  </div>  
</body>
</html>