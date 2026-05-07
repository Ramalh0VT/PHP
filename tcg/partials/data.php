<?php
$path = basename($_SERVER['SCRIPT_FILENAME']);
$header = '<nav> <a href="index.php">Adicionar</a>
		<a href="select.php">Listar</a>
		<a href="update.php">Atualizar</a>
		<a href="delete.php">Apagar</a> 
	</nav>';

if($path === 'index.php'){
	$title = 'Adicionar';
	$main = '
		<h1>Adicionar figurinha</h1>
		<form action="./index.php" method="POST" enctype="multipart/form-data">
			<label for="nome">Nome</label><br>
				<input type="text" maxlength="200" id="nome" name="nome" placeholder="Nome" required><br>
			<label for="foto">Foto</label><br>
				<input type="file" id="foto" name="foto" required><br>
			<button type="submit">Adicionar</button><br>
		</form>';


if ($_SERVER['REQUEST_METHOD'] === 'POST'){	
require_once 'crud.php';
$nova_figurinha = [
	'nome' => htmlspecialchars(trim($_POST['nome'])),
	'foto' => ''
];
$allowed_types = ['image/jpeg','image/png', 'image/gif' ];

if (!in_array($_FILES['foto']['type'],$allowed_types)) {
	$main .= '<h1>Tipo de arquivo não permitido. Por favor, use uma imagem jpeg, png ou gif</h1>';
	die();
}	

$max_size = 5 * 1024 * 1024;

if ($_FILES['foto']['size'] > $max_size) {
	$main .= '<h1>Arquivo muito grande! O tamanho máximo é de 5MB</h1>';
	die();
}

$id_nova_figurinha = create($pdo, 'figurinhas',$nova_figurinha);

$extension = pathinfo($_FILES['foto']['name'],PATHINFO_EXTENSION);

$new_name = "figurinha_".uniqid().".".$extension;

$dir = "./";

$caminho = $dir."uploads/";

$file = $caminho.$new_name;

if (move_uploaded_file($_FILES['foto']['tmp_name'], $file)){
	update($pdo, 'figurinhas', ['foto' => $file], "id = $id_nova_figurinha");
	$main .= "<h1>Figurinha inserida com sucesso! Número: $id_nova_figurinha </h1>
	<a href='select.php?id=$id_nova_figurinha'>Ver figurinhas</a>";
}
 
}
	
}

elseif($path === 'select.php'){
	$title = 'Listar';
	$main = null;
	require_once 'crud.php';
	$figurinhas = readAll ($pdo, 'figurinhas');
	$main .= '<table border=1>
	<tr>
		<th>Número</th>
		<th>Nome</th>
		<th>Foto</th>
	</tr>';
	foreach($figurinhas as $figurinha){
		$main .= "<tr><td>Nùmero: ".$figurinha['id']."</td><td>Nome: ".$figurinha['nome']."</td><td> <img src='".$figurinha['foto']."'</tr>";
	}
	$main .= '</table>';
}

elseif($path === 'delete.php'){
	require_once 'crud.php';
	$title = 'Apagar';
	$main = '
		<h1>Apagar figurinha</h1>
		<form action="./delete.php" method="POST" enctype="multipart/form-data">
			<label for="id">Número</label><br>
				<input type="text" id="id" name="id" placeholder="Número" required><br>
			<button type="submit">Remover</button><br>
		</form>';
	$figurinhas = readAll($pdo, 'figurinhas');
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$id = htmlspecialchars(trim($_POST['id']));
		foreach($figurinhas as $figurinha){
			if($figurinha['id'] === $id){
				$deleted = delete($pdo, 'figurinhas', 'id = '.$id);
				$main .= "<h1>Figurinha apagada com sucesso! Número: $id </h1>
				<a href='select.php?id=$id'>Ver figurinhas</a>";
			}
			else{	
				$main .= "<h1>Essa figurinha não existe!</h1>
				<a href='select.php?id=$id'>Ver figurinhas</a>";
				break;
			}
		}
	}	
}

elseif($path === 'update.php'){
	$figurinhas = readAll($pdo, 'figurinhas');
	require_once 'crud.php';
	$title = 'Atualizar';
	$main = '
		<h1>Editar figurinha</h1>
		<form action="./update.php" method="POST" enctype="multipart/form-data">
			<label for="id">Número</label><br>
				<input type="text" id="id" name="nome" placeholder="Número" required><br> 
			<label for="nome">Novo nome</label><br>
				<input type="text" maxlength="200" id="nome" name="nome" placeholder="Novo nome" required><br>
			<label for="foto">Foto</label><br>
				<input type="file" id="foto" name="foto" required><br>
			<button type="submit">Editar</button><br> 
		</form>';
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		$nome = htmlspecialchars(trim($_POST['nome']));
		$id = htmlspecialchars(trim($_POST['id']));
		$dados_atualizados = [
			'nome' => $nome
		];
		foreach($figurinhas as $figurinha){
			if($figurinha['id'] === $id){
				$main .= "<h1>Figurinha editada com sucesso! Número: $id </h1>
				<a href='select.php?id=$id'>Ver figurinhas</a>";
				$afetado = update($pdo, 'figurinhas', $dados_atualizados, "id = $id");
			}
			else{	
				$main .= "<h1>Essa figurinha não existe!</h1>
				<a href='select.php?id=$id'>Ver figurinhas</a>";
				break;
			}
		}
	}
	
}

// body variables on the code
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

$body = '<body>
	<header>
		'.$header.'
	</header>
	<main>
		'.$main.'
	</main>
</body>';
?>
