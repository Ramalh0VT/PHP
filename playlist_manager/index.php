<?php require_once 'crud.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars(trim($_POST['nome']));
        $novaMusica = [
            'nome' => $nome       
        ];
        $idNovaMusica = create($pdo, 'musicas', $novaMusica);
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição de músicas</title>
</head>
<body>
    <header>
	<nav>
		<a href="list.php">Listar</a>
		<a href="edit.php">Editar</a>
		<a href="index.php">Adicionar</a>
        	<a href="delete.php">Apagar</a>
	</nav>
	</header>
	<main>
		<div class="box">
            		<div>
				<h1 class="title">Adicionar músicas</h1>
	    		</div>
	    		<div>
				<form action="./index.php" method="POST">
					<h1>Nome</h1>
					<input type="text" name="nome" required maxlength="100"><br><br>
					<button type="submit">Cadastrar</button>
				</form>
 	     		</div>
		</div>
	</main>
</body>
</html>
