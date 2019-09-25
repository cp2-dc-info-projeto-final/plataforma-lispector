<?php

include("cadastro_alunos.php"); //inclui e avalia o arquivo informado

$email=$_POST['email']; //pega a variavel via post

$sql=mysql_query("SELECT * FROM usuarios WHERE email = '$email'"); //busca no banco o usuario com o email

$verifica=mysql_num_rows($sql); //conta quantos tem

if($verifica == 1){ // caso haja mais de um cadastrado...

while($Row_email = mysql_fetch_array($sql)){ //fazemos um while para coletarmos as outras informações do usuario

                $nome = $Row_email['nome']; //tais como o nome 
                $senha = $Row_email['senha']; // E a senha
                }

$msg="Olá $nome, você solicitou a recuperação de senha para o sistema\n \n"; //envia o email para a pessoa juntamente com seu nome e sua senha

$msg.="Sua senha é: $senha"; //Senha que será enviada

mail($email, "Recuperação de senha", $msg);

echo"<script>alert('Senha enviada por e-mail, verifique sua caixa de mensagens ou sua caixa de spans.'),window.open('index.php','_self')</script>";
} //alerta que o email foi enviado e o redireciona para outra página

else{ //caso contrário

echo"<script>alert('E-mail não cadastrado em nosso sistema, caso não se lembre do email cadastrado, entre em contato conosco.'),window.open('index.php','_self')</script>";
} //lhe informa que o seu e-mail não está cadastrado no banco de dados

?>