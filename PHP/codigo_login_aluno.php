<?php

$email =$_POST["email"];
$senha =$_POST["senha"];


if(autentica($email, $senha)){
    
    header('Location:perfildoaluno.php?email='.$email);

}
else{
    header('Location:formLogindeAlunos.php');
}
    
function autentica($email, $senha) {
        
        $connection = mysqli_connect("localhost", "root", "", "plataforma_lispector");
 
        // Check connection
        if($connection === false){
            die("Erro de Conexão" . mysqli_connect_error());
        }
        
        $sql = "SELECT senha, email FROM alunos WHERE email='$email'";
    
        $result = mysqli_query($connection, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $hash = $row["senha"];
    
                if ($senha == $hash) {
                    return true;                
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
        mysqli_close($connection);
    }   
?>