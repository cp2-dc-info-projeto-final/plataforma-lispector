<?php

$nome=  $_POST['nome'];
$senha= md5($_POST['senha']);
$connect= mysql_connect('CDCLAB_18\SQLEXPRESS');
$db = mysql_create_db(Cadastro_alunos);
