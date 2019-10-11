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