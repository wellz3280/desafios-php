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
		
			<h1 style="color: black; font-size: 45px;">Ola <?php echo $_GET['usuario']?></h1>

	</header>
	<main>
			<section class="login">
			
				<form method="post" action="">
					
					
					<input class="enviar-login" type="submit" value="Logout">
					
				</form>
			</section>
	</main>
</body>
</html>