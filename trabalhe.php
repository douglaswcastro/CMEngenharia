<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript">
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CM Engenharia BH</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
</style>
<link href="indexhome.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<body background="imagens/fundo2.jpg" onLoad="document.email.nome.focus();">
	<header id="cabecalho">
	  <img src=imagens/logo.gif width="113" height="109" id="logocab" align="left" />
	  <ul id="MenuBar1" class="MenuBarHorizontal" align="center">
    <li><a href="index.php"><b>Início</b></a></li>
    <li><a class="MenuBarItemSubmenu"><b>Quem Somos</b></a>
      	<ul>
          <li><a href="historia.php"><b>História</b></a></li>
          <li><a href="Missao visao valores.php"><b>Missão, Visão e Valores</b></a></li>
          <li><a href="etica.php"><b>Ética, Qualidade e Inovação</b></a></li>
        </ul>
      </li>
    <li><a href="projetos.php"><b>Obras</b></a></li>
    <li><a href="contato.php"><b>Contato</b></a></li>
    <li><a href="trabalhe.php"><b>Trabalhe Conosco</b></a></li>
    </ul>
    </header>
	<br/>
    <br/>
     <br/>
      <center><h1>Venha fazer parte da nossa equipe!!!</h1></center>
    <form onSubmit="return checa_formulario(this)" action="mail.php" method="post" enctype="multipart/form-data" name="email">
<h1 align="center" class="style1">Preencha os seus dados e mande o seu currículo que entraremos em contato </h1>
<table width="32%" border="0" align="center">
<tr>
<td><div align="right"><span class="texto">Nome</span></div></td>
<td><input name="nome" type="text" id="nome"></td>
</tr>
<tr>
<td width="33%"><div align="right" class="texto">De:</div></td>
<td width="67%"><input name="email_from" type="text" class="email"></td>
</tr>
<tr>
<td><div align="right" class="texto"></div></td>
</tr>
<tr>
<td><div align="right" class="texto">Assunto</div></td>
<td><input name="assunto" type="text" id="assunto"></td>
</tr>
<tr>
<td><div align="right" class="texto">Mensagem</div></td>
<td><textarea name="mensagem" cols="50" rows="10" id="mensagem"></textarea></td>
</tr>
<tr>
<td><div align="right" class="texto">Anexo</div></td>
<td><input name="arquivo" type="file"></td>
</tr>
<tr>
<td> </td>
<td><input type="submit" name="Submit" value="Enviar"></td>
</tr>
</table>
</form>
   
   
    
	<?php
include("footer.php");
?>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
    </script>
</body>
</html>

