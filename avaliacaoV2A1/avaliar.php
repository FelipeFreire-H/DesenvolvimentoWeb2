<?php session_start() ?>
<html>
<head>
</head>
<body>
	<p>
		<?php 
		//Instancio as variáveis globais max e min_value com seus respectivos $_session definidos na index
		$max_value = $_SESSION['contador_max'];
		$min_value = $_SESSION['contador_min'];
		?>

		<?php 
		// Aqui incluo as variáveis locais que estão localizadas no arquivo "variaveis.php"
		include "variaveis.php"; 
		?>

		<?php
		//Inicializo o contador para coletar os dados das pessoas, sendo analizadas individualmente

		while ($min_value <= $max_value) {
			//Instancio as variáveis
			$sexo = $_POST["sexo$min_value"];
			$escolaridade = $_POST["escolaridade$min_value"];

			//Nesse comparador analizo os dados selecionado pelo usuário
			if ($sexo == "m") {
				if ($escolaridade == "2_grau") {
					//Não solicitado
					//$m_segundoGrau++;
				} elseif ($escolaridade == "tecnico") {
					//Não solicitado
					//$m_tecnico++;
				} elseif ($escolaridade == "superior") {
					$m_superior++;
				} elseif ($escolaridade == "especializacao") {
					$m_especializacao++;
				} elseif ($escolaridade == "doutorado") {
					$m_doutorado++;
				} else {
					$m_mestrado++;
				}
				//A quantidade de homens participantes não foi solicitada
				//$contadorMasculino++;
			} else {
				if ($escolaridade == "2_grau") {
					//Não solicitado
					//$f_segundoGrau++;
				} elseif ($escolaridade == "tecnico") {
					//Não solicitado
					//$f_tecnico++;
				} elseif ($escolaridade == "superior") {
					$f_superior++;
				} elseif ($escolaridade == "especializacao") {
					$f_especializacao++;
				} elseif ($escolaridade == "doutorado") {
					$f_doutorado++;
				} else {
					$f_mestrado++;
				}
				//A quantidade de mulheres participantes não foi solicitada
				//$contadorFeminino++;
			}
			//A variável $min_value terá seu valor acrescentado em uma unidade até ser < ou = ao $max_value
			$min_value++;
		}
		?>
	<h3>ESTATÍSTICAS FEMININAS</h3>
	<?php
	//echo " Quantidade de mulheres $contadorFeminino  <br> ";
	echo " Quantidade de mulheres com SUPERIOR $f_superior  <br> ";
	echo " Quantidade de mulheres com ESPECIALIZAÇÃO $f_especializacao  <br> ";
	echo " Quantidade de mulheres com MESTRADO $f_mestrado  <br> ";
	echo " Quantidade de mulheres com DOUTORADO $f_doutorado  <br> ";
	?>
	<h3>ESTATÍSTICAS MASCULINAS</h3>
	<?php
	//echo " Quantidade de homens $contadorMasculino <br> ";
	echo " Quantidade de homens com SUPERIOR $m_superior  <br> ";
	echo " Quantidade de homens com ESPECIALIZAÇÃO $m_especializacao  <br> ";
	echo " Quantidade de homens com MESTRADO $m_mestrado  <br> ";
	echo " Quantidade de homens com DOUTORADO $m_doutorado  <br> ";
	?>
	</p>
</body>
</html>