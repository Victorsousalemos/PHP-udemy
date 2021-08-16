<?php 
		include 'header.php';
		$aula_atual = 'loops-for-while';
	?>


	<body>

		<h2>LOOPS WHILE e FOR</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		<h3>Selecione o ano de nascimento:</h3>

		<?php 
		$ano_atual = date('Y');
		$ano = $ano_atual;
		?>

		<select>
			<option>Selecione o ano</option>
			
			<?php while ($ano >= 1900) { ?>
			
			<option><?php echo $ano; ?></option>
			<?php $ano--; ?>
	<?php } ?>

		</select>

		<h3>Selecione o ano estimado de aposentadoria:</h3>

		<select>
			<option>Selecione o ano</option>
			
			<?php for ($ano = $ano_atual ; $ano <= 2050 ; $ano++) { ?>
			
			<option><?php echo $ano; ?></option>
		<?php } ?>
		
		</select>

			

		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>