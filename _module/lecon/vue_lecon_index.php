	<h2>lecon</h2>
	<?php if (isset($_SESSION["id"]) and ($_SESSION["pro_id"] == 1 || $_SESSION["pro_id"] == 2)) { ?>
		<p><a class="btn btn-primary" href="<?= hlien("lecon", "edit", "id", 0) ?>">Nouveau lecon</a></p>
	<?php } ?>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>

				<th>Id</th>
				<th>Libelle</th>
				<?php if (isset($_SESSION["id"]) and ($_SESSION["pro_id"] == 1 || $_SESSION["pro_id"] == 2)) { ?>
					<th>modifier</th>
					<th>supprimer</th>
				<?php } ?>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($result as $row) {
				extract($row); ?>
				<tr>

					<td><?= mhe($row['lec_id']) ?></td>
					<td><a href="fichier/<?= mhe($row['lec_id']) ?>.html"><?= mhe($row['lec_libelle']) ?></a></td>
					<?php if (isset($_SESSION["id"]) and ($_SESSION["pro_id"] == 1 || $_SESSION["pro_id"] == 2)) { ?>
						<td><a class="btn btn-warning" href="<?= hlien("lecon", "edit", "id", $row["lec_id"]) ?>">Modifier</a></td>
						<td><a class="btn btn-danger" href="<?= hlien("lecon", "del", "id", $row["lec_id"]) ?>">Supprimer</a></td>
					<?php } ?>
				</tr>
			<?php } ?>
		</tbody>
	</table>