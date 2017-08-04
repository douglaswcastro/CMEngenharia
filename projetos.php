<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>CM Engenharia BH</title>
<link href="indexhome.css" rel="stylesheet" type="text/css"/>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<body background="imagens/fundo2.jpg">
	<header id="cabecalho">
    <img src=imagens/logo.gif id="logocab" align="left" />
    <ul id="MenuBar1" class="MenuBarHorizontal" align="center">
      <li><a href="index.php"><b>Início</b></a></li>
      <li><a class="MenuBarItemSubmenu" ><b>Quem Somos</b></a>
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
    
    <style>
		
		
		a,img {border: none;}
		
		.trs {-webkit-transition:all ease-out 0.5s;
			-moz-transition:all ease-out 0.5s;
			-o-transition:all ease-out 0.5s;
			-ms-transition:all ease-out 0.5s;
			transition:all ease-out 0.5s;}
		
		#slider {position: relative; z-index: 1;}
		#slider a { position: absolute; top: 0; left: 0; opacity: 0;filter:alpha(opacity=0);}
		.ativo {opacity: 1!important; filter:alpha(opacity=100)!important;}
		
		/*controladores*/
		span {background: #0190EE; cursor: pointer; opacity: 0;filter:alpha(opacity=0); position: absolute; bottom: 40%; width: 43px; height: 43px; z-index: 5;}
		.next {right: 10px;}
		.next:before,.next:after {left: 21px;}
		.next:before {
			-webkit-transform: rotate(-42deg);
			top: 5px;
		}
		.next:after {
			-webkit-transform: rotate(-132deg);
			top: 19px;
		}
		.next:before,.next:after,.prev:before,.prev:after {content: "";
			height: 20px;
			background: #fff;
			width: 1px;
			position: absolute;
		}

		.prev {left: 10px;}
		.prev:before,.prev:after {left: 18px;}
		.prev:before {
			-webkit-transform: rotate(42deg);
			top: 5px;
		}
		.prev:after {
			-webkit-transform: rotate(132deg);
			top: 19px;
		}


		figure:hover span {opacity: 0.76;filter:alpha(opacity=76);}

		figure {
			max-width: 937px;
			height: 500px;
			position: relative;
			overflow: hidden;
			margin: 50px auto;
		}

		
	</style>

	<figure>
		<span class="trs next"></span>
		<span class="trs prev"></span>

		<div id="slider">
        <a class="trs"><img height="500px" width="937px" src="imagens/obra3.jpg"  /></a>
        <a class="trs"><img  height="500px" width="937px" src="imagens/obra1.jpg"  /></a>
        <a class="trs"><img  height="500px" width="937px" src="imagens/obra2.jpg"  /></a>
        <a class="trs"><img  height="500px" width="937px" src="imagens/obra4.jpg"  /></a>
			<a class="trs"><img src="imagens/capa1.jpg"  /></a>
           
			<a class="trs"><img src="imagens/capa2.jpg" /></a>		
            <a class="trs"><img src="imagens/capa3.jpg"  /></a>	
            <a class="trs"><img src="imagens/capa4.jpg"  /></a>	
            <a class="trs"><img  height="500px" width="937px" src="imagens/capa5.jpg"  /></a>
			<a class="trs"><img src="imagens/capa6.jpg" /></a>		
            <a class="trs"><img src="imagens/capa7.jpg"  /></a>	
            <a class="trs"><img src="imagens/capa8.jpg"  /></a>	
            <a class="trs"><img src="imagens/capa9.jpg"  /></a>	
            <a class="trs"><img  height="500px" width="937px" src="imagens/capa10.jpg"  /></a>	
            <a class="trs"><img src="imagens/capa11.jpg"  /></a>
            <a class="trs"><img src="imagens/capa12.jpg"  /></a>
            <a class="trs"><img src="imagens/capa13.jpg"  /></a>
            <a class="trs"><img src="imagens/capa14.jpg"  /></a>
            <a class="trs"><img src="imagens/capa15.jpg"  /></a>
            <a class="trs"><img src="imagens/capa16.jpg"  /></a>
            <a class="trs"><img src="imagens/capa17.jpg"  /></a>
            	
            
		</div>

		<figcaption></figcaption>
	</figure>

	<script type="text/javascript">
		function setaImagem(){
			var settings = {
				primeiraImg: function(){
					elemento = document.querySelector("#slider a:first-child");
					elemento.classList.add("ativo");
					this.legenda(elemento);
				},

				slide: function(){
					elemento = document.querySelector(".ativo");

					if(elemento.nextElementSibling){
						elemento.nextElementSibling.classList.add("ativo");
						settings.legenda(elemento.nextElementSibling);
						elemento.classList.remove("ativo");
					}else{
						elemento.classList.remove("ativo");
						settings.primeiraImg();
					}

				},

				proximo: function(){
					clearInterval(intervalo);
					elemento = document.querySelector(".ativo");
					
					if(elemento.nextElementSibling){
						elemento.nextElementSibling.classList.add("ativo");
						settings.legenda(elemento.nextElementSibling);
						elemento.classList.remove("ativo");
					}else{
						elemento.classList.remove("ativo");
						settings.primeiraImg();
					}
					intervalo = setInterval(settings.slide,4000);
				},

				anterior: function(){
					clearInterval(intervalo);
					elemento = document.querySelector(".ativo");
					
					if(elemento.previousElementSibling){
						elemento.previousElementSibling.classList.add("ativo");
						settings.legenda(elemento.previousElementSibling);
						elemento.classList.remove("ativo");
					}else{
						elemento.classList.remove("ativo");						
						elemento = document.querySelector("a:last-child");
						elemento.classList.add("ativo");
						this.legenda(elemento);
					}
					intervalo = setInterval(settings.slide,4000);
				},

				legenda: function(obj){
					var legenda = obj.querySelector("img").getAttribute("alt");
					document.querySelector("figcaption").innerHTML = legenda;
				}

			}


			//chama o slide
			settings.primeiraImg();

			//chama a legenda
			settings.legenda(elemento);

			//chama o slide à um determinado tempo
			var intervalo = setInterval(settings.slide,4000);
			document.querySelector(".next").addEventListener("click",settings.proximo,false);
			document.querySelector(".prev").addEventListener("click",settings.anterior,false);

		}

		window.addEventListener("load",setaImagem,false);
	</script>
   

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="script.js"></script>
<?php
include("footer.php");
?>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
    </script>
</body>
</html>