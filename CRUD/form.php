

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário livro</title>
</head>
<body>
	<main>
		<form>
			<label for="titulo">Titulo</label>
				<input type="text" id="titulo" name="titulo" placeholder="titulo" required maxlength="255">
			<label for="isbn">isbn</label>
				<input type="text" id="isbn" name="isbn" placeholder="isbn" maxlength="20">
			<label for="autor">Autor</label>
				<input type="text" id="autor" name="autor" placeholder="autor"maxlength="255">
			<label for="preco">Preço</label>
				<input type="number" maxlength="12" step="0.01" id="preco" name="preco" placeholder="Preço">
			<label for="situacao">Situação</label>
				<select>
					<option>Disponível</option>
					<option>Indisponível</option>
				</select>
			<label for="categoria">Categoria</label>
				<input type="text" maxlength="100" id="categoria" name="categoria" placeholder="categoria">
			<label for="capa">Capa</label>
				<input type="file" maxlength="1000" id="capa" name="capa">
			<button type="submit">ENVIAR</button>
		</form>
	<main>
</body>



