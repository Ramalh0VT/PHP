<?php
$path = basename($_SERVER['SCRIPT_FILENAME']);

// conditions to render some html code

if($path === 'index.php'){
	$title = 'Adicionar figurinha';
	$main = '
		<h1>Adicionar figurinha</h1>
		<form>
			<label for="nome">Nome</label>
				<input type="text" maxlength=""
		</form>

';
}

// global variables on the code
//
//

$metadata = '
<!DOCTYPE HTML>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/style.css">
	<title>'.$title.'</title>
</head>';

$header = '<nav> <a href="index.php">Adicionar</a>
		<a href="select.php">Listar</a>
		<a href="update.php">Atualizar</a>
		<a href="delete.php">Apagar</a> 
	</nav>';

$body = '<body>
	<header>
		'.$header.'
	</header>
	<main>
		'.$main.'
	</main>
</body>';
?>
