<?php  require_once 'crud.php';
$musicas = readAll($pdo, 'musicas');
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
	</nav>
	</header>
	<main>
		<div class="box">
			<h1>MÙSICAS ATUAIS</h1>
		
<?php
print '<table border = 1>
	<tr>
		<th>Número</th>
		<th>Música</th>
	</tr>';
foreach ($musicas as $musica){
	echo "<tr><td>".$musica['id']."</td><td> ".$musica['nome']."</td></tr>";
}

if (!$musicas){
	echo 'Sem músicas no momento!';
}?>
		</div>
	</main>
</body>
</html>

