<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pruebas</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

	<!-- STYLES -->

	<style {csp-style-nonce}>
		* {
			transition: background-color 300ms ease, color 300ms ease;
		}
		*:focus {
			background-color: rgba(221, 72, 20, .2);
			outline: none;
		}
		html, body {
			color: rgba(33, 37, 41, 1);
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
			font-size: 16px;
			margin: 0;
			padding: 0;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility;
		}
		header {
			background-color: rgba(247, 248, 249, 1);
			padding: .4rem 0 0;
		}
		.menu {
			padding: .4rem 2rem;
		}
		header ul {
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			list-style-type: none;
			margin: 0;
			overflow: hidden;
			padding: 0;
			text-align: right;
		}
		header li {
			display: inline-block;
		}
		header li a {
			border-radius: 5px;
			color: rgba(0, 0, 0, .5);
			display: block;
			height: 44px;
			text-decoration: none;
		}
		header li.menu-item a {
			border-radius: 5px;
			margin: 5px 0;
			height: 38px;
			line-height: 36px;
			padding: .4rem .65rem;
			text-align: center;
		}
		header li.menu-item a:hover,
		header li.menu-item a:focus {
			background-color: rgba(221, 72, 20, .2);
			color: rgba(221, 72, 20, 1);
		}
		header .logo {
			float: left;
			height: 44px;
			padding: .4rem .5rem;
		}
		header .menu-toggle {
			display: none;
			float: right;
			font-size: 2rem;
			font-weight: bold;
		}
		header .menu-toggle button {
			background-color: rgba(221, 72, 20, .6);
			border: none;
			border-radius: 3px;
			color: rgba(255, 255, 255, 1);
			cursor: pointer;
			font: inherit;
			font-size: 1.3rem;
			height: 36px;
			padding: 0;
			margin: 11px 0;
			overflow: visible;
			width: 40px;
		}
		header .menu-toggle button:hover,
		header .menu-toggle button:focus {
			background-color: rgba(221, 72, 20, .8);
			color: rgba(255, 255, 255, .8);
		}
		header .heroe {
			margin: 0 auto;
			max-width: 1100px;
			padding: 1rem 1.75rem 1.75rem 1.75rem;
		}
		header .heroe h1 {
			font-size: 2.5rem;
			font-weight: 500;
		}
		header .heroe h2 {
			font-size: 1.5rem;
			font-weight: 300;
		}
		section {
			margin: 0 auto;
			max-width: 1100px;
			padding: 2.5rem 1.75rem 3.5rem 1.75rem;
		}
		section h1 {
			margin-bottom: 2.5rem;
		}
		section h2 {
			font-size: 120%;
			line-height: 2.5rem;
			padding-top: 1.5rem;
		}
		section pre {
			background-color: rgba(247, 248, 249, 1);
			border: 1px solid rgba(242, 242, 242, 1);
			display: block;
			font-size: .9rem;
			margin: 2rem 0;
			padding: 1rem 1.5rem;
			white-space: pre-wrap;
			word-break: break-all;
		}
		section code {
			display: block;
		}
		section a {
			color: rgba(221, 72, 20, 1);
		}
		section svg {
			margin-bottom: -5px;
			margin-right: 5px;
			width: 25px;
		}
		.further {
			background-color: rgba(247, 248, 249, 1);
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			border-top: 1px solid rgba(242, 242, 242, 1);
		}
		.further h2:first-of-type {
			padding-top: 0;
		}
		footer {
			background-color: rgba(221, 72, 20, .8);
			text-align: center;
		}
		footer .environment {
			color: rgba(255, 255, 255, 1);
			padding: 2rem 1.75rem;
		}
		footer .copyrights {
			background-color: rgba(62, 62, 62, 1);
			color: rgba(200, 200, 200, 1);
			padding: .25rem 1.75rem;
		}
		@media (max-width: 559px) {
			header ul {
				padding: 0;
			}
			header .menu-toggle {
				padding: 0 1rem;
			}
			header .menu-item {
				background-color: rgba(244, 245, 246, 1);
				border-top: 1px solid rgba(242, 242, 242, 1);
				margin: 0 15px;
				width: calc(100% - 30px);
			}
			header .menu-toggle {
				display: block;
			}
			header .hidden {
				display: none;
			}
			header li.menu-item a {
				background-color: rgba(221, 72, 20, .1);
			}
			header li.menu-item a:hover,
			header li.menu-item a:focus {
				background-color: rgba(221, 72, 20, .7);
				color: rgba(255, 255, 255, .8);
			}
		}
	</style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

	<div class="menu">
		<ul>
			<li class="menu-toggle">
				<button onclick="toggleMenu();">&#9776;</button>
			</li>
			<li class="menu-item hidden"><a href="#">Inicio</a></li>
		</ul>
	</div>

	<div class="heroe">

		<h1>Reportes</h1>
		    <form action="home/guardarDetalle" method="post">
		    <div>
		        <div>
		        <p>No. Dictamen
		        <input type="text" name="cert_no" id="cert_no" value="<?php echo $datos['cert_no']; ?>"></p>
		        <p>Institucion
		        <textarea  name="institucion" id="institucion"><?php echo $datos['institucion']; ?></textarea></p>
		        
		        </div>
		        <textarea id="editor1" name="editor1"><?php echo $datos['texto']; ?></textarea>
            </div>
            <div>
                <textarea id="pasteArea" placeholder="Imagenes" style="float: right; margin: 0px; width: 128px; height: 33px; margin-top:50px"></textarea>
                <img id="pastedImage" style="max-width:200px; max-height: auto; margin-top: 50px; margin-bottom:50px; float:right;"></img>
            </div>
            <div>
		        <button style="margin-bottom:30px; margin-top:30px;" class="btn btn-info">Guardar</button> 
		    </div>

		</form>
		
		
		<div>
		    <p><a href="<?php echo base_url()."/home/traerReporte/1"; ?>" target="_blank"><button style="margin-bottom:30px; margin-top:30px;" class="btn btn-info">Generar reporte</button></a> 
		    <a href="<?php echo base_url()."/home/crearPDFPortada/1"; ?>" target="_blank"><button style="margin-bottom:30px; margin-top:30px;" class="btn btn-info">Generar indice</button></a></p>

        <div name="contenido" id="contenido" style="padding: 25px 25px 25px 25px;">
            <iframe src="/home/traerReporte/1" frameborder="0" width="100%" height="1024px"  ></iframe>
            <!-- <iframe src="/home/crearIndice" frameborder="0" width="100%" height="600px"  ></iframe> -->
        </div>

        </div>
        
	</div>
<?php echo base_url().'/assets/ckeditor/ckeditor.js'; ?>
</header>

<!-- SCRIPTS -->

<script>
	function toggleMenu() {
		var menuItems = document.getElementsByClassName('menu-item');
		for (var i = 0; i < menuItems.length; i++) {
			var menuItem = menuItems[i];
			menuItem.classList.toggle("hidden");
		}
	}
	
</script>

<script src="<?php echo base_url(); ?>/assets/ckeditor/ckeditor.js"></script>

<script>

function updateDiv(nombre_div) {
    $("#" + nombre_div).load(window.location.href + " #" + nombre_div);
}

CKEDITOR.replace('editor1', {
    contentsCss: [
        'https://cdn.ckeditor.com/4.16.2/full-all/contents.css',
        'https://grana.enlineasistemas.com/css/style.css'
      ]
    
});



document.getElementById('pasteArea').onpaste = function (event) {
  // use event.originalEvent.clipboard for newer chrome versions
  var items = (event.clipboardData  || event.originalEvent.clipboardData).items;
  console.log(JSON.stringify(items)); // will give you the mime types
  // find pasted image among pasted items
  var blob = null;
  for (var i = 0; i < items.length; i++) {
    if (items[i].type.indexOf("image") === 0) {
      blob = items[i].getAsFile();
    }
  }
  // load image if there is a pasted image
  if (blob !== null) {
    var reader = new FileReader();
    reader.onload = function(event) {
      console.log(event.target.result); // data url!
      document.getElementById("pastedImage").src = event.target.result;
    };
    reader.readAsDataURL(blob);
  }
}

</script>


<!-- -->

</body>
</html>
