<link rel="stylesheet" href="../CSS/Logins.css" >

<script type="text/javascript" src="../JavaScript/Logins.js"> </script>
<div id="login">

<nav class="menu">

<meta charset="utf-8">


<link rel="stylesheet" href="../CSS/Menu.css">

<ul>
<li><a href="../HTML/Index.html">Home</a></li>
<li><a href="formCadastrodeProfessores.php">Cadastros</a></li>
          <ul>
          <li><a href="formCadastrodeProfessores.php">Cadastro de Professores</a></li>
          <li><a href="formCadastrodeAlunos.php">Cadastro de Alunos</a><li>
</ul>    
<li><a href="#">Logins</a>
          <ul>
					<li><a href="formLogindeAlunos.php">Login do Aluno</a></li>
          <li><a href="frmLoginProfessor.php">Login do Professor</a></li>
</ul>      

    </ul>
    
  </nav>

  
        <div class="login-page">
          

<div class="form">

 
  <form method="post" action="codigo_login_aluno.php"> 


  <h1> Login do Aluno </h1>

    <input type="text" name="email" placeholder="Digite seu E-mail"/>

    <input type="password" name="senha" placeholder="Digite sua Senha"/>
    
    <input type="submit" value="Logar"/>


    <p class="message">Não é cadastrado? <a href="formCadastrodeAlunos.php">Cadastre-se!</a></p>

  </form>

</div>

</div>