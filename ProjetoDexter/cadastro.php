<!doctype html>
<html dir="ltr" lang="pt-BR">
<head>
<meta charset="utf-8">
<title>Dexter Courier | Cadastre-se</title>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700'
	rel='stylesheet' type='text/css'>
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700'
	rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header class="header">
        <?php #topo ?>
    </header>

	<div class="container content">
		<div class="title center">
			<h1>Cadastre-se</h1>
		</div>

		<div class="banner-fixed">
			<img src="img/banner-cadastro.jpg" alt="Banner Sobre">
		</div>

		<form action="#" method="post" class="form">
			<p>
				<label for="nome">Nome/Razao</label> <input type="text" name="nome"
					id="nome_razao" required>
			</p>
			<p>
				<label for="email">Email</label> <input type="email" name="email"
					id="email" required>
			</p>
			<p>
				<label for="tel">Telefone</label> <input type="tel" name="telefone"
					id="telefone" required>
			</p>
			<p>
				<label for="cel">Celular</label> <input type="tel" name="celular"
					id="celular"  required>
			</p>
			<p>
				<label for="cep">Cep</label> <input type="tel" name="cep" id="tel"
					 required>
			</p>
			<p>
				<label for="endereco">Endereço</label> <input type="tel"
					name="telefone" id="bai" required>
			</p>
			<p>
				<label for="bairro">Bairro</label> <input type="tel" name="bairro"
					id="tel" required>
			</p>
			<p>
				<label for="cidade">Cidade</label> <input type="tel" name="cidade"
					id="cidade" required>
			</p>
			<p>
				<label for="Estado">Estado</label>
				 <select name="estado" id="estado">
					<option value="">Selecione</option>
					<option value="AC">AC</option>
					<option value="AL">AL</option>
					<option value="AP">AP</option>
					<option value="AM">AM</option>
					<option value="BA">BA</option>
					<option value="CE">CE</option>
					<option value="DF">DF</option>
					<option value="ES">ES</option>
					<option value="GO">GO</option>
					<option value="MA">MA</option>
					<option value="MT">MT</option>
					<option value="MS">MS</option>
					<option value="MG">MG</option>
					<option value="PA">PA</option>
					<option value="PB">PB</option>
					<option value="PR">PR</option>
					<option value="PE">PE</option>
					<option value="PI">PI</option>
					<option value="RJ">RJ</option>
					<option value="RN">RN</option>
					<option value="RS">RS</option>
					<option value="RO">RO</option>
					<option value="RR">RR</option>
					<option value="SC">SC</option>
					<option value="SP">SP</option>
					<option value="SE">SE</option>
					<option value="TO">TO</option>
				</select>
			</p>
			<p>
				<button class="btn">Enviar</button>
			</p>
		</form>
	</div>

	<footer class="footer">
        <?php #rodape ?>
    </footer>

</body>

</html>
