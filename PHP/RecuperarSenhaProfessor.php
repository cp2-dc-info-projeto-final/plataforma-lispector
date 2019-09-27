<!DOCTYPE html> <!-- Indica ao navegador que este é um documento HTML. -->

<html lang="pt-br"> <!-- Declaração do idioma no código HTML. -->

<head> <!-- Nessa tag, estão inseridas as informações específicas da página, o título, o estilo, a codificação etc. -->

  <title>Recuperação da Senha</title> <!-- Define o título do documento. -->

 <header> <!-- Representa um contêiner para conteúdo introdutório ou um conjunto de links de navegação. -->

    <meta charset="UTF-8">

  <h1 style= "background: #ffffff; color: darkblue; padding: 10px; text-align: center;">Recuperação de Senha</h1> <!-- Elemento do cabeçalho estilizado. -->

  <style>
  
  body {background-color: lightskyblue}

  </style>

<form action="" method="POST" enctype="multipart/form-data">

  <?php

  if (isset($_GET['recuperar']) && $_GET ['recuperar'] == 'sim'){

    ?>

    <input type="text" name="emailRecupera" value="" />
    <input type="hidden" name="acao" value="" />
    <input type="submit" name="RecuperarSenha" value="recuperar" />
  <?php }else{?>
    <input type="text" name="emailLoga" value="" />
    <input type="password" name="senhaLoga" value="" />
    <input type="hidden" name="acao" value="logar" />
    <input type="submit" name="logar" value="" />
    <a href="?recuperar=sim">Esqueceu sua senha?</a>

?php }?> 