<?php
require_once 'includes/header.php';

$query = <<<SQL
SELECT
	u.*
FROM
	usuarios u
	INNER JOIN
		seguindo s
	ON s.seu_id = u.id
WHERE
	s.meu_id = {$_SESSION['usuario']['id']}
SQL;

?>
<div class="row">
	<div class="col-md-12 col-md-offset-3">
		<div class="table-responsive">
			<table style="width:40%" class="table-striped table-holder">
				<thead>
					<tr>
						<th style="width:70%">Usuário</th>
						<th style="width:30%">Açoes</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach (getResultados($query) as $usuario) : ?>
					<tr>
						<td>
							<a href="perfil.php?usuario=<?php echo $usuario['usuario'];?>">
								<?php echo $usuario['usuario'];?>
							</a>
						</td>
						<td>
							<a class="btn btn-sm btn-danger" href="operacao_seguir.php?operacao=deixar_seguir&usuario_id=<?php echo $usuario['id']; ?>">Deixar de Seguir</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php
require_once 'includes/footer.php';
?>