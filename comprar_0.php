<!DOCTYPE HTML PUBLIC>
<html lang="es">
<head>
	<title>La P�gina del Mill�n de Pesos</title>
	<meta charset="uft-8"/>
	<meta name="description" content="La p�gina web de Marco Hern�ndez, un chico de 17 a�os de edad, quien espera pagar su carrera universidad mediante la venta de un mill�n de p�xeles de espacios publicitarios en Internet por $1 peso cada uno.">
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="icono1.jpg">
</head>
<body>
	<!-- ENCABEZADO -->
    <div id="d" style="position:absolute;z-index:99;left:0px;top:0px;border: #ff0000 1px solid; background: #ffffff;">
        <span id="xcoord"></span><span id="ycoord"></span>
    </div>
    <header>
		<div id="toplogo">
			<a href="#"><img src="img-site/logo-tm1.png" border=0 width=360 height=36 style="position:absolute; LEFT: 11; TOP: 7px; z-index: 1;"></a>
		</div>     	 			 	
     	<div class="letrero"><img src="img-site/toptag.png" style="position:absolute; LEFT: 550; TOP: 7px; z-index: 1;" alt="1,000,000 pixels - $1 per pixel - Own a piece of internet history!"></div>
     	<div class="letrero2"><img src="img-site/mexico.png" style="position:absolute; LEFT: 550; TOP: 27px; z-index: 1;"></div>
     	<!-- ESTADISTICA -->
		<div id="stats">
			<font class="stat1">Vendidos:</font> 
			<font id="statgreen">1010</font><br>
			<font class="stat1">Disponibles:</font> 
			<font id="statred">998,990</font></div>
		</div>
	</header>
	<!-- MENU -->
	<div id="menu">
			<ul>
				<li><a class="nav" href="index.html">Inicio</a></li>
				<li><a class="nav" href="comprar.php">Comprar pixeles</a></li>
				<li><a class="nav" href="preguntas.php">Preguntas frecuentes</a></li>
				<li><a class="nav" href="#">Lista de pixeles</a></li>
				<li><a class="nav" href="contacto.php">Contacto</a></li>
			</ul>
	</div>
	<!-- CONTENIDO -->
    <center>
    	<script type="text/javascript" src="gsc3.js"></script>
    	<table id="contenido" style="position:relative; LEFT: 0; TOP: 0; z-index: 0;" border=0 bgcolor=#e1e1e1 cellpadding=0 cellspacing=0 width=1002>
			<tr>
				<td id="tablebreak" width=1></td><td width=1000 height=1000 background="bg10.gif" valign=top>
					<form name=compra method="get" action="comprar_1.php">
					<!--	<input type=hidden name=comprar_ value="1.php">-->
						<input type=hidden name=xcoord>
						<input type=hidden name=ycoord>
					</form>
					<div id="f" style="display:none;font-size:0px;margin:0px;padding:0px;border: #0000ff 2px solid;position: absolute;width:1px;height:1px;z-index:2;"></div>
					<div id="pixels" style="z-index:1">
						<map name="Map" id="Map">

							<area onmouseover="d(this)" onmouseout="e(this)" shape="rect" coords="0,0,10,10" href="https://fondeadora.mx/projects/librotana" title="Librotana"/>
							<area onmouseover="d(this)" onmouseout="e(this)" shape="rect" coords="10,0,20,10" href="JavaScript:compra_pixel(1,0);" title="Espacio disponible, �C�mpralo ya!"/>
							<area onmouseover="d(this)" onmouseout="e(this)" shape="rect" coords="350,490,400,510" href="http://ninovan.bandcamp.com/" title="Ni�o van Music"/>
						</map>

						<img name="twee" id="twee" src="img-pix/image-map.png?r=972" width="1000" height="1000" border="0" ismap usemap="#Map" style="position: absolute; top: 0px; left: 0px; border: none"/>
					
						<img name="een" id="een" src="img-pix/image-map.png?r=166" width="2000" height="2000" border="0" style="position: absolute; top: 0px; left: 0px; clip: rect(0px, 100px, 100px, 0px); border: black 2px solid; background: url(bg20.gif); display:none"/>
					
						<img src="img-pix/neg.gif" name="neg" id="neg" width="1000" height="1000" style="position:absolute;top:0px;left:0px;display:none">
	   				</div>
				</td>
			</tr>
		</table>
		<!-- PIE -->
		<footer>
			<div>
				La P�gina del Mill�n de Pesos &copy; 2014 Marco Hern�ndez. Todos los derechos reservados.<br> No soy responsable por el contenido de sitios externos. Las imagenes aqu� son &copy; de sus respectivos propietarios.
			</div>
		</footer>
	</center>
</body>
</html>