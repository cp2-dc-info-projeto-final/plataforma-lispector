<?php
//arquivo que seria o dito 'código_login_aluno'...
    function autentica($email, $senha) {
        
        $connection = mysqli_connect("localhost", "root", "", "plataforma_lispector");
 
        // Check connection
        if($connection === false){
            die("Erro de Conexão" . mysqli_connect_error());
        }
        
        $sql = "SELECT senha, nome FROM alunos WHERE email='$email'";
    
        $result = mysqli_query($connection, $sql);
        
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $hash = $row["senha"];
        
                    if (password_verify($senha, $hash)) {
                        return true;
                    } else {
                        return false;
                    }
                }
            } else {
                return false;
            }
        } else {
            die(mysqli_error($connection));
        }
        

        mysqli_close($connection);
    }   
?>