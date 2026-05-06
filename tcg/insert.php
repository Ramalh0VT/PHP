<html>
<?php
require_once 'partials/data.php';
echo $metadata;
echo $body;

/* require_once 'crud.php';
$nova_figurinha = [
	'nome' => $_POST['nome'],
	'foto' => ''
];
$allowed_types = ['image/jpeg','image/png', 'image/gif' ];

if (!in_array($_FILES['foto']['type'],$allowed_types)) {
	echo '<h1 class="title">Tipo de arquivo não permitido. Por favor, use uma imagem jpeg, png ou gif</h1>';
	die();
}	

$max_size = 5 * 1024 * 1024;

if ($_FILES['foto']['size'] > $max_size) {
	echo '<h1 class="title">Arquivo muito grande! O tamanho máximo é de 5MB</h1>';
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
	echo "<h1>Figurinha inserida com sucesso! Número: $id_nova_figurinha </h1>";
	echo "<a href='select.php? id=$id_nova_figurinha'>Ver figurinhas</a>";
}
?> */
?>
</html>
