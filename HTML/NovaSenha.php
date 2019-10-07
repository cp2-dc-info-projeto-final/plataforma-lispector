<?php>

include ("Conexao.php");

if(isset($_POST[ok])){

    $novasenha = substr(md5(time()), 0, 6);

}

echo substr(md5(time()), 0, 6);

?>

<form action="">
    <input placeholder= "Seu e-mail" name="email" type="text">
    <input name="ok" value="ok" type="submit">