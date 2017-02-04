    <header class="header">
           <?php
               #buscar o registro baseado no id vindo como parametro
               #alterar o registro caso haja um post
            ?>
              <style type="text/css">
            textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input{
	           padding: 10px;
                height:auto;
            }
        </style>
    </header>
    <div class="container">
    <div class="row">
    <div class="span12" style="margin-top:20px">
        <legend class="title">
            <h3>Alterar Cliente</h3>
        </legend>

		<form action="#" method="post" class="form">
			<p>
				<label for="nome">Nome/Razao</label> <input type="text" name="nome"
					id="nome_razao" value="<?php #'nome_razao' ?>" required>
			</p>
			<p>
				<label for="nome">CPF/CNPJ</label> <input type="text" name="nome"
					id="nome_razao" value="<?php #'cpf_cnpj' ?>" required>
			</p>
			<p>
				<label for="email">Email</label> <input type="email" name="email"
					id="email" value="<?php #'email' ?>" required>
			</p>
			<p>
				<label for="tel">Telefone</label> <input type="tel" name="telefone"
					id="telefone" value="<?php #'telefone' ?>" required>
			</p>
			<p>
				<label for="cel">Celular</label> <input type="tel" name="celular"
					id="celular"  value="<?php #'celular' ?>" required>
			</p>
			<p>
				<label for="cep">Cep</label> <input type="tel" name="cep" id="tel" value="<?php echo #'cep' ?>"
					 required>
			</p>
			<p>
				<label for="endereco">Endereço</label> <input type="tel"
					name="telefone" id="bai" value="<?php #'endereco' ?>" required>
			</p>
			<p>
				<label for="bairro">Bairro</label> <input type="tel" name="bairro"
					id="tel" value="<?php #'bairro' ?>" required>
			</p>
			<p>
				<label for="cidade">Cidade</label> <input type="tel" name="cidade"
					id="cidade" value="<?php #'cidade' ?>" required>
			</p>
			<p>
				<label for="Estado">Estado</label>
				 <select name="estado" id="estado">
					<option value="">Selecione</option>
					<option value="<?php #'estado'?>" selected="true"><?php #'estado' ?></option>
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
				<button class="btn">Gravar</button>
			</p>
		</form>

    </div>
</div>
</div>

</body>

</html>
