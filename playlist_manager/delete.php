<?php
require_once 'crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = htmlspecialchars(trim($_POST['id']));
    $deleted = delete($pdo, 'musicas', 'id = '.$id);
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar música</title>
</head>
<body>
    <header>
	<nav>
		<a href="list.php">Listar</a>
		<a href="edit.php">Editar</a>
		<a href="index.php">Adicionar</a>
        <a href="delete.php"> Apagar </a>
	</nav>
	</header>
<main>
		<div class="box">
            <div>
			<h1 class="title">Exclusão de músicas</h1>
	    </div>
	    <div>
			<form action="./delete.php" method="POST">
				<h1>Número da música</h1>
				<input type="text" name="id" required maxlength="100"><br><br>
				<button type="submit">Deletar</button>
		
			</form>
 	     </div>
		</div>
	</main>
</body>
</html>

