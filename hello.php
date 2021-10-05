<?php
	$erroLogin = $_GET['id'];

	if($erroLogin == 1 ){
		echo "usuario ou senha invalidos";
		$borda = "red";
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="src/media/hello.css">
	<link rel="stylesheet" type="text/css" href="src/media/reset.css">
	<title>Hello </title>
</head>
<body>
	<header>
		
			<h1>Desafio Hello</h1>

	</header>
	<main>
			<section class="login">
			
				<form method="post" action="src/Hello/validaLogin.php">
					
					<input style="border:2px solid <?php echo $borda;?>" class="input-login" type="text" name="login" id="login" placeholder="Retr0" required>
					
					<input style="border:2px solid <?php echo $borda;?>" class="input-login" type="password" name="senha" id="senha" placeholder="**************" required>
				
					<input class="enviar-login" type="submit" value="Login">
					<input class="logout" type="submit" value="Logout">
				</form>
			</section>
	</main>
</body>
</html>