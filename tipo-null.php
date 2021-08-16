	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'tipo-null';
	?>


	<body>


		<h2>NULL</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		<h3>NULL = Ausência de valor</h3>

		<?php $posts = 0;
		
		var_dump($posts);

		echo '<br><br>';

		if ($posts == NULL) {
			echo 'A variável é igual a NULL';
		} else {
			echo 'A variável NÃO é igual a NULL';
		}

		?>

				

		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>