<?php
    
    function cadastraUsuario($nome, $email, $senha) {
        $connection = mysqli_connect("localhost", "root", "", "lp3");
 
        // Check connection
        if($connection === false){
            die("Deu ruim mano!" . mysqli_connect_error());
        }
        $sql = "SELECT id FROM usuario WHERE email='$email'"; //falta ver o banco de dados do tcc para saber se é "id FROM usuario" mesmo
        $result = mysqli_query($connection, $sql);
        $erro = "";
        # password hash
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        
        if (mysqli_num_rows($result) > 0) {
            return false;
        }
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES
                ('$nome', '$email', '$hash')"; //verificar aqui também
        if(mysqli_query($connection, $sql)){
            return true;
        } else{
            die("Erro ao efetuar cadastro $sql. " . mysqli_error($connection));
        }
        mysqli_close($connection);
    }
?>