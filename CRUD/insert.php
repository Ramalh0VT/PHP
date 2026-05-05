<?php
require_once 'crud.php';

$novoLivro = [
	'titulo' => 'PHP for dummies',
	'isbn' => '9781118008',
	'autor' => 'John Doe',
	'preco' => 299.99,
	'situacao' => 'Disponivel',
	'Categoria' => 'Informática'
];

$idLivroNovo = create($pdo, 'livros', $novoLivro);
echo 'novo Livro inserido com ID: '.$idLivroNovo.'';

?>
