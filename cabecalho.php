<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CM Engenharia BH</title>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
</head>
<body background="imagens/fundo2.jpg">
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
 <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
 <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
 <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
 <link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/indexhome.css" rel="stylesheet" type="text/css"/>

<div class="navbar navbar-static-top">
  <div class="navbar-inner">
  <div class="container">
    <a class="brand" href="#">CM Engenharia BH</a>
    <ul  class="nav nav-pills">
      <li class="divider-vertical" class="active"><a href="index.php">Início</a></li>
      <li class="divider-vertical"><a href="quemsomos.php">Quem Somos</a></li>
    <img src="imagens/logo.gif" width="50" height="50" align="left"/>
      <li class="divider-vertical"><a href="projetos.php">Projetos</a></li>
      <li class="divider-vertical"><a href="contato.php">Entre em contato</a></li>
      <li class="divider-vertical"><a href="#myModal" role="button" data-toggle="modal">Trabalhe Conosco</a></li>
    </ul>
    </div>
  </div>
</div>

 <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <span id="myModalLabel">Trabalhe Conosco</span>
  </div>
  <div class="modal-body">
<form onSubmit="return checa_formulario(this)" action="mail.php" method="post" enctype="multipart/form-data" name="email">
<table>
<tr>
<td><div align="right" class="texto">Nome:</div></td>
<td><input name="nome" type="text" id="nome" required></td>
</tr>
<tr>
<td align="right">De:</td>
<td><input name="email_from" type="email" class="email" required></td>
</tr>
<tr>
<td><div align="right" class="texto">Assunto:</div></td>
<td><input name="assunto" type="text" id="assunto" required></td>
</tr>
<tr>
<td><div align="right" class="texto">Mensagem:</div></td>
<td><textarea name="mensagem" id="mensagem" required></textarea></td>
</tr>
<tr>
<td><div align="right" class="texto">Anexo:</div></td>
<td><input name="arquivo" type="file" required></td>
</tr>
</table>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
    <button type="submit" class="btn btn-primary">Enviar Currículo</button>
  </div>
</form>
</div>
    <script src="http://code.jquery.com/jquery.js"></script>
  </body>
</html>
<script>
    function checa_formulario(email){
if (email.nome.value == ""){
alert("Por Favor não deixe o seu nome em branco!!!");
email.nome.focus();
return (false);
}
if (email.email_from.value == ""){
alert("Por Favor não deixe o seu email em branco!!!");
email.email_from.focus();
return (false);
}
if (email.email.value == ""){
alert("não deixe o email destinatario em branco!!!");
email.email.focus();
return (false);
}
if (email.assunto.value == ""){
alert("não deixe o assunto em branco!!!");
email.assunto.focus();
return (false); 
}	
}
</script>