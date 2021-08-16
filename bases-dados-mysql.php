	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'base-dados-mysql';
	?>


	<body>


		<h2>Bases de Dados MySQL</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>



		<h3>MySQLi</h3>

		<?php

		$server = 'localhost';
		$user = 'root';
		$password = 'root';
		$dbname = 'curso_php';
		$port = '3306';

		$db_connect = new mysqli($server, $user, $password, $dbname, $port);

		if ($db_connect->connect_error == true) {
			echo 'falha na conexão: ' . $db_connect->connect_error;
		} else {
			echo 'conexão feita com sucesso' . '<br>';

			$sql = "INSERT INTO clientes(nome,email) VALUES ('Pedro', 'pedro@gmail.com')";

			if ($db_connect->query($sql) == true) {
				echo "dados inseridos com sucesso";
			} else {
				echo "falha no envio dos dados";
			}

		}

		?>

		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>