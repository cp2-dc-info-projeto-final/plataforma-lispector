?php

$host="C:\Users\labcaxias\Documents\TCC\plataforma-lispector\Banco de Dados"
$user=""
$password="1234"
$banco="plataforma-lispector"
$link=mysql_connect($host, $user, $password);
$db=mysql_select_db($banco,$link);
if(!$link)
{
    echo "erro ao conectar ao banco de dados!";exit();
}
?>