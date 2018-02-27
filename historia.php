<?php
include("head.php");
?>
		<!-- Page -->
        
        	<div id="page">
            	<div class="container">
                	<div class="row">
                    
                    	<div id="content">
                        	<article>
                            	<header class="text-center">
                                    <h2>CM Engenharia BH</h2>
                                </header>
                                <p>
                                Os profissionais com ampla experiência e um corpo técnico formado por uma equipe de profissionais altamente
                                qualificada seu departamento técnico é composto por engenheiros na área civil e produção, mestre de obras, 
                                técnico em edificações, técnicos em segurança do trabalho e oficiais em varias áreas com anos de experiência 
                                em obras industriais, pavimentações e residenciais.
                                Buscamos atender com o máximo grau de qualidade e compromisso, ultrapassando as expectativas dos nossos cliente.
                                </p>
                            </article>
                          </div>
                    	                   
                    </div>

                    <div class="row">
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
</div>
                </div>
            </div>
            
		<!-- /Page -->
        <?php
            include("footer.php");
        ?>
	</body>
</html>