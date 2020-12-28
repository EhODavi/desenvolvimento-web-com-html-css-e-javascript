	<?php
	$conexao = mysqli_connect("localhost", "root", "", "wd43");
	$dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
	$produto = mysqli_fetch_array($dados);
	$cabecalho_css = '<link rel="stylesheet" href="css/produto.css">';
	$cabecalho_title = "Produto da Mirror Fashion - " . $produto['nome'];
	include("cabecalho.php"); 
	?>
	<div class="produto-back">
		<div class="container">
			<div class="produto">
				<h1><?= $produto['nome'] ?></h1>
				<p>por apenas <?= $produto['preco'] ?></p>
				<div class="fb-like" data-href="http://www.mirrorfashion.net" data-send="false" data-layout="box_count" data-width="58" data-show-faces="false"></div>
				<a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical">Tweet</a>
				<div class="g-plusone" data-annotation="inline"></div>
				<form action="checkout.php" method="POST">
					<fieldset class="cores">
						<legend>Escolha a cor:</legend>
						<input type="radio" name="cor" value="verde" id="verde" checked>
						<label for="verde">
							<img src="img/produtos/foto<?= $produto['id'] ?>-verde.png">
						</label>
						<input type="radio" name="cor" value="rosa" id="rosa">
						<label for="rosa">
							<img src="img/produtos/foto<?= $produto['id'] ?>-rosa.png">
						</label>
						<input type="radio" name="cor" value="azul" id="azul">
						<label for="azul">
							<img src="img/produtos/foto<?= $produto['id'] ?>-azul.png">
						</label>
					</fieldset>
					<fieldset class="tamanhos">
						<legend>Escolha o tamanho:</legend>
						<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
						<output for="tamanho" name="valortamanho">42</output>
					</fieldset>
					<input type="hidden" name="id" value="<?= $produto['id'] ?>">
					<button class="comprar">Comprar</button>
				</form>
			</div>
			<div class="detalhes">
				<h2>Detalhes do produto</h2>
				<p><?= $produto['descricao'] ?></p>
				<table>
					<thead>
						<tr>
							<th>Característica</th>
							<th>Detalhe</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Modelo</td>
							<td>Cardigã 7845</td>
						</tr>
						<tr>
							<td>Material</td>
							<td>Algodão e poliester</td>
						</tr>
						<tr>
							<td>Cores</td>
							<td>Azul, Rosa e Verde</td>
						</tr>
						<tr>
							<td>Lavagem</td>
							<td>Lavar a mão</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<?php 
	include("rodape.php"); 
	?>
	<script type="text/javascript" src="js/produto.js"></script>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "http://connect.facebook.net/pt_BR/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
			if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
				js.src="http://platform.twitter.com/widgets.js";
				fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
			</script>
			<script type="text/javascript">
				window.___gcfg = {lang: 'pt-BR'};
				(function() {
					var po = document.createElement('script');
					po.type = 'text/javascript';
					po.async = true;
					po.src = 'https://apis.google.com/js/plusone.js';
					var s = document.getElementsByTagName('script')[0];
					s.parentNode.insertBefore(po, s);
				})();
			</script>
		</body>
		</html>