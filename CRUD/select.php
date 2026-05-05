<?php
require_once 'crud.php';

$livros = readAll($pdo, 'livros');

print '<table border=1>
<tr>
	<th>ID</th>
	<th>TITULO</th>
</tr>
';

// print_r($livros);

foreach($livros as $livro) {
		echo "<tr><td>ID: ".$livro['id']."</td><td> Titulo: ".$livro['titulo']."</td><td> <img src='".$livro['capa']."'</td></tr>";
}
 
/* $livro = read($pdo, 'livros', 'id = 3');

if ($livro){
	echo '<p> O livro em questão é: '.$livro['titulo'].'</p>
			<img src="'.$livro['capa'].'">';

}
*/
print "</table>";
?>
