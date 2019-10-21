<!DOCTYPE html> <!-- Indica ao navegador que este é um documento HTML. -->

<html lang="pt-br"> <!-- Declaração do idioma no código HTML. -->

<head> <!-- Nessa tag, estão inseridas as informações específicas da página, o título, o estilo, a codificação etc. -->

  <title>Página de Envio</title> <!-- Define o título do documento. -->

 <header> <!-- Representa um contêiner para conteúdo introdutório ou um conjunto de links de navegação. -->

    <meta charset="UTF-8">

  <h1 style= "background: #ffffff; color: darkblue; padding: 10px; text-align: center;">Página de Envio</h1> <!-- Elemento do cabeçalho estilizado. -->

</header>

<style>

body {background-color: lightskyblue;}

</style>
<body>

<a href="Index.html">Home</a>
<?php

$uploadir='../var/www/uploads';
$uploadfile=$uploadir.basename($_FILES['userfile']['name']);
echo '<pre>';
if(move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile)){
    echo "Arquivo enviado !";
}else{
    echo "Não foi possível enviar o arquivo";
}
print_r($_FILES);
print"</pre>";
?>
</body>
</html>