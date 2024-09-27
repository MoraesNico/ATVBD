<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Produto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Registrar Produto</h1>
    <form action="registrar_produto.php" method="POST" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" required>

        <label for="preco">Preço:</label>
        <input type="text" id="preco" name="preco" required>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao"></textarea>

        <label for="codigo_barra">Código de Barra:</label>
        <input type="text" id="codigo_barra" name="codigo_barra" required>

        <label for="imagem">Imagem:</label>
        <input type="file" id="imagem" name="imagem" accept="image/*">

        <label for="setor">Setor:</label>
        <input type="text" id="setor" name="setor" list="setores" required>
        <datalist id="setores">
            <option value="alimento">
            <option value="bebida">
            <option value="limpeza">
            <option value="hortifruti">
        </datalist>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
