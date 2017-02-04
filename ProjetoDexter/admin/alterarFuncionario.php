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
            <h3>+ Novo Funcionário</h3>
        </legend>

		<form action="#" method="post" class="form">
			<p>
				<label for="nome">Nome</label> <input type="text" name="nome"
					id="nome_razao" value="<?php #['nome'] ?>" required>
			</p>
			<p>
				<label for="email">Email</label> <input type="email" name="email"
					id="email" value="<?php #['email'] ?>" required>
			</p>
			<p>
				<label for="tel">Senha</label> <input type="password" name="telefone"
					id="telefone" value="xxxxxx" required>
			</p>

			<p>
				<label for="prf_id">Perfíl</label>
				 <select name="prf_id">
									 <?php #Inicio do laco para exibir os perfis ){ ?>
 <option value = "<?php #Id Perfil ?>">
												<?php #Nome Perfil ?>
											</option>
									 <?php # Fim do Laço?>
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
