<link rel="stylesheet" href="../CSS/Logins.css" >

<script type="text/javascript" src="../JavaScript/Logins.js"> </script>
<div id="login">

<nav class="menu">

<meta charset="utf-8">


<link rel="stylesheet" href="../CSS/Menu.css">

<ul>
<li><a> href="perfildoaluno.html">Perfil do aluno</a></li>
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

  
        <div class="login-page">
          

<div class="form">

  <form class="register-form">

  </form>

  <form class="login-form">

  <form method="post" action="codigo_login_aluno.php"> 


  <h1> Login do Aluno </h1>

    <input type="text" placeholder="Digite seu E-mail"/>

    <input type="password" placeholder="Digite sua Senha"/>

    <button>login
    header("location: perfildoaluno.php");
    </button>

    <p class="message">Não é cadastrado? <a href="formCadastrodeAlunos.php">Cadastre-se!</a></p>

  </form>

</div>

</div>