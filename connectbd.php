<?php

function connectbd(){

	$connect = mysql_connect('localhost','root','','Cadastro_aluno','3306');
	if(!$connect)
		die("Não foi possível conectar ao servidor" .mysql_error($connect));
	return $connect;
}
