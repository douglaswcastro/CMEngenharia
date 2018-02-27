	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CM Engenharia BH</title>
        <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
		<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body class="homepage">
		<script src="js/bootstrap.min.js"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>

		<!-- Header -->
		<div id="header-wrapper">
		
        	<div id="header" class="container">
            
                <nav id="nav">
                    <ul>
                        <li><a href="index.php">Início</a></li>
                        <li><a href="historia.php">História</a></li>
                        <li><a href="projetos.php">Projetos</a></li>
                        <li><a href="#myModal" role="button" data-toggle="modal">Trabalhe Conosco</a></li>
                    </ul>
                </nav>
                
            </div>
			
			<div id="banner">
				<div class="container">
					<div class="row">
						<section class="12u">
							<header>
								<h2>CM Engenharia BH</h2>
								<span class="byline">A CM ENGENHARIA foi fundada com o objetivo a atender o mercado da construção civil de uma forma diferenciada, com o foco em redução de custos, qualidade, segurança e entrega dentro do prazo.</span>
							</header>
							<a href="historia.php" class="button button-alt">Saiba Mais</a>
						</section>
					</div>
				</div>
			</div>			

		</div>
		<!-- Header Ends Here -->



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