	<?php 
		include 'header.php';
		$aula_atual = 'valida-formularios';
	?>

	<?php

	function clean_input($data) {
		$cleandata = trim($data);
		$cleandata = stripslashes($cleandata);
		$cleandata = htmlspecialchars($cleandata);

		return $cleandata;
	}

	?>

	<body>


		<h2>Formulários</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		
		<h3>Envie seus dados</h3>

		<?php

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$nome = $_POST['nome'];
			$email = $_POST['email'];

			if ($nome == "") {
				$erro_nome = '* O nome é obrigatório';
			} elseif ($email == "") {
				$erro_email = '* O e-mail é obrigatório';
			} elseif ( filter_var($email,FILTER_VALIDATE_EMAIL) == false) {
				$erro_email = '* O e-mail informado é inválido';
			} else {
				$nome = clean_input($nome);
				$email = clean_input($email);

				$server = 'localhost';
				$user = 'root';
				$password = 'root';
				$dbname = 'curso_php';
				$port = '3306';

				$db_connect = new mysqli($server, $user, $password, $dbname, $port);

				if ($db_connect->connect_error == true) {
					$msg_envio = 'Não foi possível enviar o formulário.';
				} else {
					echo 'conexão feita com sucesso' . '<br>';

					$sql = "INSERT INTO clientes(nome,email) VALUES ('$nome', '$email')";

					if ($db_connect->query($sql) == true) {
						$msg_envio = 'Formulário enviado com sucesso.';
						$nome = NULL;
						$email = NULL;
					} else {
						$msg_envio = 'Não foi possível enviar o formulário.';
					}

		}
			}
		}

		?>


		<form action="valida-formularios.php" method="post">
			
			Nome: *
			<br>
			<input type="text" name="nome" class="field" value="<?php echo $nome; ?>">
			<br>
			<div class="erro-form"><?php echo $erro_nome; ?></div>
			<br>
			
			E-mail: *
			<br>
			<input type="text" name="email" class="field" value="<?php echo $nome; ?>">
			<br>
			<div class="erro-form"><?php echo $erro_email; ?></div>
			<br>

			<input type="submit" name="submit" class="submit"><br>
			<div class="sucesso-form"><?php echo $msg_envio; ?></div>

		</form>

	


		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>