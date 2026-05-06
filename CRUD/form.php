<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário livro</title>
</head>
<body>
	<main>
		<form action="insert.php" method="POST" enctype="multipart/form-data">
			<label for="titulo">Titulo</label><br>
				<input type="text" id="titulo" name="titulo" placeholder="titulo (Obrigatório)" required maxlength="255"><br>
			<label for="isbn">isbn</label><br>
				<input type="text" id="isbn" name="isbn" placeholder="isbn" maxlength="20"><br>
			<label for="autor">Autor</label><br>
				<input type="text" id="autor" name="autor" placeholder="autor"maxlength="255"><br>
			<label for="preco">Preço</label><br>
				<input type="text" maxlength="12" id="preco" name="preco" placeholder="Preço"><br>
			<label for="situacao">Situação</label><br>
				<select name="situacao" id="situacao">
					<option value="disponivel">Disponível</option>
					<option value="indisponivel">Indisponível</option>
				</select><br>
			<label for="categoria">Categoria</label><br>
				<input type="text" maxlength="100" id="categoria" name="categoria" placeholder="categoria"><br>
			<label for="capa">Capa</label><br>
				<input type="file" maxlength="1000" id="arquivo" accept="image/*" name="arquivo"><br>
			<button type="submit">ENVIAR</button><br>
		</form>
	<main>
</body>



