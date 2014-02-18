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
		
		<?php
			function calculaMedia($vp1, $vp2, $vf){
				$media = ($vp1 + (2 * $vp2) + (3 * $vf))/6;
				return $media;
			}



			echo"A media para 9, 7.8, 5 eh: " . calculaMedia(9, 7.8, 5);
		?>
	</div>
	<div id="rodape">
		<p>
			Faculdade 7 de Setembro - PHP para Iniciantes - Módulo 2
		</p>
	</div>
</body>
</html>
