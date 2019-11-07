<link rel="stylesheet" href="../CSS/LoginAluno.css">

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