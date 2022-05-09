<?php session_start() ?>
<html>
<head>
	<h1> AVALIAÇÃO A1 </h1>
	<h3>Aluno: Felipe das Neves Freire <br> Turma: 3ºD </h3>
	<hr>
</head>
<body>
	<?php 
		//Aqui inicio uma tabela onde os dados seram enviados pelo método post, portanto, ocultando os dados na URL
		//E ao clicar no botão, será redirecionado para a página "contar.php"
	?>
	<form method="post" action="avaliar.php">
		<?php	
		//Variáveis globais para os contadores
		$valor_contador_min = 1;
		$valor_contador_max = 10;

		//Estou utilizando session para poder reutiliza-las diretamente no contador da página "contar.php"
		$_SESSION['contador_min'] = $valor_contador_min;
		$_SESSION['contador_max'] = $valor_contador_max;

		//Esse laço for vai repetir na index a quantidade de pessoas que terão seus dados coletados
		//Variáveis globais fixas, a variável $num será mutável e irá permitir a coleta de cada pessoa
		for ($num = $valor_contador_min; $num <= $valor_contador_max; $num++) {
		?>
			<p> DADOS DA PESSOA: ( <?php echo $num ?> ) </p>

			<?php 
				//Não coloquei um required no campo do nome por não ser solicitado o nome de cada pessoa
			?>

			<p> Digite seu nome: <input type="text" name="nome<?php echo $num ?>"> </p>

			<p>
				Sexo:
				<input type="radio" name="sexo<?php echo $num ?>" value="m"required> Masculino
				<input type="radio" name="sexo<?php echo $num ?>" value="f"> Feminino
			</p>

			<p>
				Escolaridade:
				<input type="radio" name="escolaridade<?php echo $num ?>" value="2_grau"required> 2º Grau
				<input type="radio" name="escolaridade<?php echo $num ?>" value="tecnico"> Técnico
				<input type="radio" name="escolaridade<?php echo $num ?>" value="superior"> Superior
				<input type="radio" name="escolaridade<?php echo $num ?>" value="especializacao"> Especialização
				<input type="radio" name="escolaridade<?php echo $num ?>" value="mestrado"> Mestrado
				<input type="radio" name="escolaridade<?php echo $num ?>" value="doutorado"> Doutorado
			</p>
			<hr>

		<?php
		}
		?>
		<p> <input type="submit" value="Avaliar!"> </p>
	</form>
</body>
</html>