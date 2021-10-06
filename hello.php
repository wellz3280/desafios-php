<?php
	if(!isset($_GET['id'])){
		$_GET['id'] = 0;
		$borda = "border: 2px solid #dcdcdc";
	}else{
		$_GET['id'] = 1; 
		$borda = "border: 2px solid #ff0000";
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
					
					<input style=" <?php echo $borda;?>" class="input-login" type="text" name="login" id="login" placeholder="Retr0" required>
					
					<input style="<?php echo $borda;?>" class="input-login" type="password" name="senha" id="senha" placeholder="**************" required>
				
					<input class="enviar-login" type="submit" value="Login">
					
				</form>
			</section>
	</main>
</body>
</html>