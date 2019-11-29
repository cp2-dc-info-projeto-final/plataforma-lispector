<link rel="stylesheet" href="../CSS/Perfis.css">
<nav  class="menu">

<link rel="stylesheet" href="../CSS/Menu.css">

<ul>
<li><a href="../HTML/Index.html">Home</a></li>
<li> <a href="perfildoprofessor.php">Seu Perfil</a><li>
<li><a href= "../PHP/EnviarQuestoes.php">Enviar Questões</a></li>
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
  
  </nav>


<div class="form">
<form action="questoesCtrl.php" method="post">
    <p>
        <label for="enunciado">Enunciado</label>
        <input type="text" name="enunciado" id="enunciado">
    </p>
    <p>
        <label for="opA">Opção A:</label>
        <input type="text" name="opA" id="opA">
    </p>
    <p>
        <label for="opB">Opção B</label>
        <input type="text" name="opB" id="opB">
    </p>
    <p>
        <label for="opC">Opção C</label>
        <input type="text" name="opC" id="op´C">
    </p>
    <p>
        <label for="opD">Opção D</label>
        <input type="text" name="opD" id="opD">
    </p>
    <p>
        <label for="gabarito">Gabarito</label>
        <input type="text"  name="gabarito" id="gabarito">
    </p>
    

    
    <button type="submit" value="submit" class="btn btn-primary">Enviar para a Turma</button>
  <?php
        //session_start();
        if(array_key_exists('erro', $_SESSION) == true){
            $erro = $_SESSION["erro"];
            echo "<br><b>$erro</b>";
        }
    ?>

</form>
</div>
    
</body>
</html>