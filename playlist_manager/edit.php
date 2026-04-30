<?php
require_once 'crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars(trim($_POST['nome']));
    $id = htmlspecialchars(trim($_POST['id']));
        $dadosAtualizados = [
            'nome' => $nome 
        ];
$linhasAfetadas = update($pdo, 'musicas', $dadosAtualizados ,"id = $id");
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
			<h1 class="title">Edição de músicas</h1>
	    </div>
	    <div>
			<form action="./edit.php" method="POST">
				<h1>Número</h1>
				<input type="text" name="id" required maxlength="100">
                <h1>Novo nome</h1>
                <input type="text" name="nome" required maxlength="100"><br><br>
                <button type="submit">Editar</button>
			</form>
 	     </div>
		</div>
	</main>
</body>
</html>

