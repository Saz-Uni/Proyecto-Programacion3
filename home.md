# Proyecto-Programacion3
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web de vestas inmobiliaria</title>
	<link rel="icon"  href="https://i.pinimg.com/564x/fc/16/ef/fc16eff6cd8c7ff12538799b8bd8f82e.jpg">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>  
	<header>
		<ul>
			<li><a href="home.html">Inicio</a></li>
			<li><a href="apts.html">Productos</a></li>
			<li><a href="CalculadoraWeb.html">Calculadora</a></li>
			<li><a href="#contacto">Contacto</a></li>
			<li><a href="acaercade.html">Acerca de</a></li>
		</ul>
	</header>
	
<main>
		<h1><center>Inmobiliaria</center></h1>
</main>

<a href="apts.html" position=center>
    <div class="contenedor">
      <img src="https://img.freepik.com/foto-gratis/texturas-exteriores-contrastantes_23-2149702208.jpg?semt=ais_hybrid&w=740">
      	<div class="texto">Propiedades</div>
    	</div>
</a><br>

<a href="#contacto" position=center>
    <div class="contenedor">
      <img src="https://img.freepik.com/fotos-premium/empresario-usando-tableta-digital-sosteniendo-lapiz-optico-presionando-pantalla-virtual-boton-barra-busqueda_35674-12769.jpg">
      <div class="texto">Contactanos</div>
    </div><br>
</a>

<a href="acaercade.html" position=center>
    <div class="contenedor">
      <img src="https://web.persianfreegate.com/wp-content/uploads/2021/11/contact_us_background2.jpg">
      <div class="texto">Acerca de nosotros</div>
    </div>
</a>

</body>

<footer style="background-color:black">
	<section id="contacto">
		<h3><center>Contacto</center></h3>
			<div class="social-bar">
        		<a href="https://www.facebook.com/UniversidadECCI" target="_blank" rel="noopener noreferrer" title="Facebook">
          			<img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook"/>
        		</a>
          		<a href="https://wa.me/573162862300?text=Hola%20quiero%20más%20información" target="_blank" rel="noopener noreferrer" title="WhatsApp">
           			<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
          		</a>
            	<a href="https://www.instagram.com/universidad.ecci/" target="_blank" rel="noopener noreferrer" title="Instagram">
              		<img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg" alt="Instagram" />
           		</a>
  			</div> 
</footer> 


header{
    text-align: left;
    text-size-adjust: auto;
    background-color: gray;
    color: white;
}
body {
    margin: 0;
    height: 100vh;
    background-image: url("https://fireart.studio/wp-content/uploads/2021/02/frame-188-5.jpg");
    background-color: #000;
    font-family: Arial, sans-serif;
    text-align: justify;
    color: aliceblue;
}

.contenedor {
	position: relative;
 	display: inline-block;
    width: 500px;   
    height: 250px;
    cursor: pointer;
}
.contenedor img {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 12px;
}
.texto {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 24px;
    font-weight: bold;
    pointer-events: none; 
}
.mapa {
    position: relative;
    margin: 20px auto;
    max-width: 600px;
}
iframe {
 	width: 100%;
 	height: 400px;
  	border: 0;
  	border-radius: 12px;
	box-shadow: 0 0 10px rgba(0,0,0,0.3);
}

.imagenes{
    width: 40px;
    height: 40px;
    border-radius: 12px;
}

.social-bar {
    background-color: #000;
	display: flex;
	gap: 10px;
	padding: 10px;
	background-color: #f0f0f0;
}
.social-bar a { 
	display: inline-block;
	width: 40px;
	height: 40px;
    text-decoration: none;
}
.social-bar img {
	width: 100%;
	height: auto;
    vertical-align: middle;
}
.formato_imagen{
    width: 300px;
    height: 400px;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
    margin-bottom: 10px;
}
</html>
