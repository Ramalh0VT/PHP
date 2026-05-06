<?php
require_once 'crud.php';
$nova_figurinha = [
	'nome' => $_POST['nome'],
	'capa' => ''
];
$allowed_types = ['image/jpeg','image/png', 'image/gif' ];

if (!in_array($_FILES['capa']['type'],$allowed_types)) {
	echo "<h1 class="title">Tipo de arquivo não permitido. Por favor, use uma imagem jpeg, png ou gif</h1>";
	die();
}	

$max_size = 5 * 1024 * 1024;

if ($_FILES['capa']['size'] > $max_size) {
	echo "<h1 class="title">Arquivo muito grande! O tamanho máximo é de 5MB</h1>";
	die();
}

$id_nova_figurinha = create($pdo, 'figurinhas',$nova_figurinha);

$extension = pathinfo($_FILES['capa']['name'],PATHINFO_EXTENSION);

$new_name = "figurinha_".uniqid().".".$extension;

$dir = "./";

$caminho = $dir."uploads/";

$file = $caminho.$novonome;

if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $file)){
	$figurinha_url
}
?>	
