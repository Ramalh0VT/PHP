<?php
require_once 'crud.php';

$novoLivro = [
	'titulo' => $_POST['titulo'],
	'isbn' => $_POST['isbn'],
	'autor' => $_POST['Autor'],
	'preco' => $_POST['preco'],
	'situacao' => $_POST['situacao'],
	'categoria' => $_POST['categoria']
	'capa' => '' 
];

$idLivroNovo = create($pdo, 'livros', $novoLivro

$tipos_permitidos = ['image/jpeg', 'image/png', 'image/gif'];


if (!in_array($_FILES['arquivo']['type'], $tipos_permitidos)) {
	echo "Tipo de arquivo não permitido. Por favor, envie uma jpeg, png ou gif.";
	die();
}

$tamanho_max = 1 * 1024 * 1024;
if ($_FILES['arquivo']['size'] > $tamanho_max) {

	echo "O arquivo é muito grande! O tamanho máximo permitido é de 1MB";
	die();
}

$extensao = pathinfo($_FILES['arquivos']['name'],PATHINFO_EXTENSION);


$novonome = "capa_".uniqid().".".$extensao;

$dir = "uploads/";

$caminho = $dir
?>
