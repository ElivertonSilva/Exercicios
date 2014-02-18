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

		function isPrimo($x){
			$isPrimo = False;

			if(($x == 0) || ($x == 1)){
				$isPrimo = False;
			} else if(($x == 2)||($x == 3)){
				$isPrimo = True;
			} else if(($x%2 != 0) && ($x != 3)){
				for($i=3 ; $i < $x ; $i+=2){
					if($x%$i == 0){
						$isPrimo = False;
						break;
					}
					$isPrimo = True;
				}
			}
			return $isPrimo;
		}

		
		for($i = 1 ; $i <= 1000 ; $i++){
			if(isPrimo($i)){
				echo"<br/>".$i;
			}
		}

		?>
	</div>
	<div id="rodape">
		<p>
			Faculdade 7 de Setembro - PHP para Iniciantes - Módulo 2
		</p>
	</div>
</body>
</html>
