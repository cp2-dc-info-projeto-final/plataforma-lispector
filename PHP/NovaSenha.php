<h1 style= background: #ffffff; color: darkblue; padding: 10px; text-align: center>Recuperação de Senha</h1> <!-- Elemento do cabeçalho estilizado. -->


<?php

include("Conexao.php");

if(isset($_POST["Enviar"])){

    $novasenha = substr(md5(time()), 0, 6);
}

?>

<form action="">

    <input placeholder= "Seu e-mail" name="email" type="text">
    <input name="Enviar" value= "Enviar" type="submit">

</form>

<style>

body {background-color: lightskyblue;}