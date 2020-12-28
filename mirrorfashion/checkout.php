<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Checkout Mirror Fashion</title>
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<?php 
    	$conexao = mysqli_connect("localhost", "root", "", "wd43");
		$dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_POST[id]");
		$produto = mysqli_fetch_array($dados);
	?>
	<h1>Ótima escolha!</h1>
	<p>Obrigado por comprar na Mirror Fashion!
	Preencha seus dados para efetivar a compra.</p>
	<h2>Sua compra</h2>
	<dl>
		<dt>Descrição</dt>
		<dd><?= $produto['descricao'] ?></dd>
		<dt>Data</dt>
		<dd><?= $produto['data'] ?></dd>
		<dt>Produto</dt>
		<dd><?= $produto['nome'] ?></dd>
		<dt>Preço</dt>
		<dd><?= $produto['preco'] ?></dd>
	</dl>
</body>
</html>