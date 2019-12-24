<?php // Dados do PHP

$email = $_POST['email'];
$senha = $_POST['senha'];

session_start();  //Reinicializa um array de sessão com os valores originais
if ($senha != $senha) {     // Exige preenchimento nos campos do formulario (Senha e Confirma Senha)
    $erro = "SENHAS NÃO COINCIDENTES";     // Mensagem que aparecerá, caso haja o erro.   
    $_SESSION["erro"] = $erro;
    header("Location: formLogindeProfessor.php"); // Página que retornará, caso haja o erro.
    exit();}
    
    # Hash da senha
    $hash = password_hash($senha, PASSWORD_DEFAULT); // Transformação de uma grande quantidade de dados, em uma pequena quantidade de informações.
    
    $connection = mysqli_connect ("localhost", "root", "", "plataforma_lispector"); // Conectar com o Banco de Dados
    
    if (mysqli_connect_error($connection)) { // Retorna uma string descrevendo o ultimo erro da função connect
    
        echo "Erro de conexão"; // Mensagem que aparecerá, caso haja o erro.
    }
    else {
        header('Location: perfildoprofessor.php');  // Mensagem que aparecerá, caso dê certo!
    }
    
    $sql = "SELECT id_aluno FROM alunos";
    $result = mysqli_query($connection, $sql);
    $erro = "";
     
    // Attempt insert query execution
    $sql = "INSERT INTO alunos (email, senha) VALUES ('$email', '$hash')";
    if(mysqli_query($connection, $sql)){
        
    }
    ?>