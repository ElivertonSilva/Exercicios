<html>
<head>
  <title>Iniciando PHP</title>
  <link href="estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="topo">
		<h1>PHP para Iniciantes</h1>
	</div>
	<div id="conteudo">
		<!-- Escreva seu código aqui -->
		<?php
			$vp1 = $_POST["vp1"];
			$vp2 = $_POST["vp2"];
			$vf = $_POST["vf"];

			function calculaMedia($vp1, $vp2, $vf){
				$media = ($vp1 + $vp2 * 2 + $vf * 3)/6;
				return $media;
			}

			echo"<p class=destaque>Sua media eh:".calculaMedia($vp1, $vp2, $vf)."</p>";
		?>
	
	
	</div>
	<div id="rodape">
		<p>
			Faculdade 7 de Setembro - PHP para Iniciantes - Módulo 2
		</p>
	</div>
</body>
</html>
