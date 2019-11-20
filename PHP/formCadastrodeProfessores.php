<!DOCTYPE html>

<head>

  <meta charset="UTF-8" />

  <title>Cadastro de Funcionários</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  <link rel="stylesheet" href="../CSS/Teste.css">


</head>

<body>

      <div id="cadastro">

        <form method="post" action="codigo_cadastro_alunos.php"> 

          <h1>Cadastro de Professores</h1> 
           
          <p> 
            <label for="nome">Digite seu nome</label>
            <input id="nome" name="nome" required="required" type="text" placeholder="nome" />
          </p>
           
          <p> 
            <label for="email">Digite Seu e-mail</label>
            <input id="email" name="email" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
          </p>
           
          <p> 
            <label for="senha">Crie uma senha</label>
            <input id="senha" name="senha" required="required" type="password" placeholder="ex. 1234"/>
          </p>

          <p> 
              <label for="senha">Confirme sua senha</label>
              <input id="senha" name="senha" required="required" type="password" placeholder="ex. 1234"/>
            </p>
           
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
           
          <p class="link">  
            Já tem conta?
            <a href="../PHP/frmLoginProfessor.php">Entre!</a>
          </p>
        </form>
      </div>
    </div>
  </div>  
</body>
</html>