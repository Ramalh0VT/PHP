<?php

require_once 'crud.php';

$idLivro = 675;

$deleted = delete($pdo, 'livros', 'id = '.$idLivro);

if ($deleted){
	echo 'Livro excluido com sucesso';
} else {
		echo 'Não foi possível excluir o lívro';
}
?>

