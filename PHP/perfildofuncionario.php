<html><head>

<script type="text/javascript">

function checa(){

if(document.form.nome.value == ""){

alert("Digite um nome válido")

return false;

document.form.nome.focus();

}

<form name="form" action="cadastra.php"><input type="text" name="nome">
{
if(document.form.login.value == "" || document.form.login.value.length < 3)


alert("Digite um login válido ou acima de 3 dígitos")

return false;

document.form.login.focus();

}
{
if(document.form.senha.value == "" || document.form.senha.value.legth < 5)

alert("Digite uma senha válida")

return false;

document.form.senha.focus();

}
{
if(document.form.email.value == "" || document.form.email.value.indexOf('@')==-1 || document.form.email.value.indexOf('.')==-1)

alert("Digite um e-mail válido")

return false;

document.form.email.focus();

}
{
if(document.form.email.value != document.form.confmail.value)

alert("Os e-mails não correspondem")

document.form.confmail.focus();

return false;

}

{
if(document.form.senha.value != document.form.confsenha.value)

alert("As senhas não correspondem");

document.form.confsenha.focus();

return false;

}

</script>

</head><title>Página de Perfil Do Funcionário</title><body marginheight="0" marginwidth="0" leftmargin="0" topmargin="0" bgcolor="#0000FF">

<form name="form" action="confirma.php" method="POST" onSubmit="return Checa()">

<table border="0" width="150" cellspacing="0" cellpadding="0">

<td valign="top">Nome:</td><td><input type="text" name="nome"></td></tr><tr>

<Td>E-mail:</td><td><input type="text" name="email"></td></tr><TR>

<Td>Login:</td><td><input type="text" name="login"></td></tr><TR>

<td>Confirme E-mail:</td><td><input type="text" name="confmail"></td></tr><Tr>

<TR><Td>Turma:</td><td><input type="text" name="Turma"></td></tr><TR>


<td align="center"><input type="submit" value="Enviar">&nbsp;&nbsp;
<input type="reset" value="Apagar"></td></form></tr></table>

</body></html>