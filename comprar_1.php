<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="es">
<head>
	<title>La Página del Millón de Pesos</title>
	<meta charset="uft-8"/>
	<meta name="description" content="La página web de Marco Hernández, un chico de 17 años de edad, quien espera pagar su carrera universidad mediante la venta de un millón de píxeles de espacios publicitarios en Internet por $1 peso cada uno.">
	<link rel="stylesheet" href="stylepage.css">
	<link rel="shortcut icon" href="icono1.jpg">
	<script language="JavaScript">
	<!--
	function estimar_precio() {
		var hola="grf";
		document.forms["form"].sumar.value=parseInt(document.forms["form"].ancho.value)*parseInt(document.forms["form"].alto.value);
		document.forms["form"].pixels.value=100*document.forms["form"].sumar.value;
		document.forms["form"].precio.value=document.forms["form"].pixels.value;
	}

	function acceptarCondicions() {
		var errada = 'Para finalizar el proceso debe aceptar las condiciones y terminos de la web';
		if ( document.forms["form"].condiciones.checked  == false) {
			alert(errada);
		} else {
			document.forms["form"].submit();
		}
	}
	//-->
</script>
</head>
<body>
    <div id="d" style="position:absolute;z-index:99;left:0px;top:0px;border: #ff0000 1px solid; background: #ffffff;">
        <span id="xcoord"></span><span id="ycoord"></span>
    </div>
    <!-- ENCABEZADO -->
    <header>
		<div id="encabezado">
			<a href="#"><img src="img-site/logo-tm1.png" border=0 width=360 height=36 style="position:absolute; LEFT: 11; TOP: 7px; z-index: 1;"></a>
		</div>     	 			 	
     	<div class="letrero"><img src="img-site/toptag.png" style="position:absolute; LEFT: 550; TOP: 7px; z-index: 1;" alt="1,000,000 pixels - $1 per pixel - Own a piece of internet history!"></div>
     	<div class="letrero2"><img src="img-site/mexico.png" style="position:absolute; LEFT: 550; TOP: 27px; z-index: 1;"></div>
        <!-- ESTADISTICA -->
     	<div id="stats">
			<font class="stat1">Vendidos:</font> 
			<font id="statrojo">1010</font><br>
			<font class="stat1">Disponibles:</font> 
			<font id="statverde">998,990</font></div>
		</div>
	</header>
	<!-- MENU -->
	<div id="menu">
			<ul>
				<li><a class="nav" href="index.html">Inicio</a></li>
				<li><a class="nav" href="#">Comprar pixeles</a></li>
				<li><a class="nav" href="preguntas.php">Preguntas frecuentes</a></li>
				<li><a class="nav" href="#">Lista de pixeles</a></li>
				<li><a class="nav" href="contacto.php">Contacto</a></li>
			</ul>
	</div>
	<!-- CONTENIDO -->
    <center>
    	<table id="contenido" style="position:relative; LEFT: 0; TOP: 0; z-index: 0;" border=0 bgcolor=#e1e1e1 cellpadding=0 cellspacing=0 width="1006px">
			<tr>
				<td width=1000 height=1000 background="bg10.gif" valign=top>
						<?php
						$coordx=$_GET['xcoord']; 
						$coordy=$_GET['ycoord'];
						?>
				
					<div id="all">
						<h1>Comprar píxeles</h1>
						<ol>
							<li>Su imagen será situada apartir de las coordenadas (<?php echo "$coordx"; ?>,<?php echo "$coordy"; ?>).</li>
							<li>
								<p>Tamaño:<br>Cada cuadro es de 10x10 px = 100 px</p>
								<form method="get" action="compra_2.php" name="form">
									Ancho:<input type="text" size="6" name="ancho" value="1">cuadros.<br>
									Alto:<input type="text" size="6" name="alto" value="1">cuadros.
							</li>
							<li>
								<p>Estimar precio</p>
								<input type="button" value="Calcular de precio" name="estimar" onClick="estimar_precio()">
							</li>
							<li>
								<p>Detalles:</p>
								<p>Numero de cuadritos:<input type="text" name="sumar" size="6" disabled="true"></p>
								<p>Total de píxeles:<input type="text" name="pixels" size="6" disabled="true"></p>
								<p>Total a pagar: $<input type="text" name="precio" size="6" disabled="true">pesos (MX)</p>
							</li>
						</ol>
						<input type="submit" value="Seguir paso 2 >>">
						</form>
						
					</div>
				</td>
			</tr>
		</table>
		<!-- PIE -->
		<footer>
			<div>
				La Página del Millón de Pesos &copy; 2014 Marco Hernández. Todos los derechos reservados.<br> No soy responsable por el contenido de sitios externos. Las imagenes aquí son &copy; de sus respectivos propietarios.
			</div>
		</footer>
	</center>
</body>
</html>