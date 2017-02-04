<!doctype html>
<html dir="ltr" lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Dexter Courier | Serviços</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
       <?php #topo ?>
    </header>


    <section class="servicos">
        <div class="container content">
            <div class="title center">
                <h1>Nossos Serviços</h1>
                <h3>Não importa o tamanho  da sua empresa, a Dexter tem a solução certa para você.</h3>
            </div>
            <ul>
                <?php
            		#inicio do laço para exibição dos servicos

	            ?>
                <li>
                        <a href="#"><img src="<?php #url do icone ;?>" alt="">
                        <h2><?php #nome do servico ;?></h2>
                        <p><?php #descricao do ;?></p></a>
                </li>
                <?php #fim do laco ?>
            </ul>
        </div>
    </section>

    <section class="mobile">
        <div class="container">
            <h2>A Dexter agora na sua mão</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, voluptas, veritatis earum quod saepe sed eaque tempore iure officia ea odit voluptatem minima blanditiis delectus illo ipsa ratione doloremque necessitatibus id veniam neque fugiat itaque ad magni repellat expedita non amet sequi dolores consequatur autem mollitia quaerat placeat harum cum.</p>
            <a href="#" class="btn btn-yellow">Android</a>
            <a href="#" class="btn btn-yellow">iPhone</a>

            <img src="img/iphone.jpg" alt="Dexter Mobile" class="phone">
        </div>
    </section>

    <footer class="footer">
       <?php #rodape ?>
    </footer>

</body>

</html>
