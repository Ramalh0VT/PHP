<?php

require_once 'crud.php';

$idLivro = 675;

$dadosAtualizados = 
	[
	'titulo' => 'Pife for dummies',
	'isbn' => '9781118008',
	'autor' => 'Jane Doe',
	'preco' => 299.99,
	'situacao' => 'Indisponivel',
	'Categoria' => 'Informática'
];

$linhasAfetadas = update($pdo, 'livros', 'id = '.$idLivro.'');

if ($linhasAfetadas > 0) {
	echo 'Livro atualizado com sucesso!!!';
}

else{
	echo 'Não foi possível atualizar o livro!!!'; 	
}

?>
