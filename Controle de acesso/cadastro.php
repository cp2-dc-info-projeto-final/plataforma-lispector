<?php
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $matricula = $_POST["matricula"];
    $senha = MD5$_POST["senha"];
    $confirmaSenha = $_POST["confirmaSenha"];
    session_start();
    if ($senha != $confirmaSenha) {    
        $erro = "As senhas não coincidem";        
        $_SESSION["erro"] = $erro;
        header("Location: formCadastro.php");
        exit();
    }c
    # password hash
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    $connection = mysqli_connect("localhost", "root", "", "plataforma_lispector");
 
    // Check connection
    if($connection === false){
        die("Deu ruim, mano!" . mysqli_connect_error());
    }
    $sql = "SELECT id FROM usuario WHERE email='$email'";
    $result = mysqli_query($connection, $sql);
    $erro = "";
    
    if (mysqli_num_rows($result) > 0) {
        $erro = "E-mail indisponível.";        
        $_SESSION["erro"] = $erro;
        header("Location: formCadastro.php");
        exit();
    }
    $sql = "INSERT INTO usuario (id, nome, email, matricula, senha, confirmaSenha) VALUES
            ('$id', '$nome', '$email', '$matricula', '$senha', '$hash')";
    if(mysqli_query($connection, $sql)){
        session_unset();
        header("Location: formLogin.php");
        exit();
    } else{
        die("Deu ruim no cadastro $sql. " . mysqli_error($connection));
    }
    mysqli_close($connection);
?>