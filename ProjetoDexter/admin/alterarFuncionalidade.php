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
            <h3>Alterar Serviço</h3>
        </legend>

		<form action="#" method="post" class="form">
			<p>
				<label for="nome">Nome</label> <input type="text" name="nome"
					id="nome" value="<?php #['nome'] ?>" required>
			</p>
			<p>
				<label for="email">Descrição</label> <input type="text" name="descricao"
					id="descricao" value="<?php #['descricao'] ?>" required>
			</p>
			<p>
				<label for="tel">Icone</label> <input type="text" name="url_icone"
					id="url_icone" value="<?php #['url_icone'] ?>" required>
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
