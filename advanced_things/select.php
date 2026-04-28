<?php
require_once 'crud.php';

$livros = readAll($pdo, 'livros', 'preco < 50 and id < 50');

print '<table border=1>
<tr>
	<th>ID</th>
	<th>TITULO</th>
</tr>
';

// print_r($livros);

foreach($livros as $livro) {
		echo "<tr><td>ID: ".$livro['id']."</td><td> Titulo: ".$livro['titulo']."</td></tr>";
}

print "</table>";
?>
