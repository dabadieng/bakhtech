	<h2>lecon</h2>
	<button id="btn" onclick="filtrage()">Filtrer</button>
	<div id="choix" style="display: none">
		<p>
			<label for='Dys'>Dys</label>
			<input type='checkbox' name='unCheck' id='Dys' <?= isset($Dys) ? 'checked' : '' ?>>
		</p>

		<p>
			<label for='Moteur'>Moteur</label>
			<input type='checkbox' name='unCheck' id='Moteur' <?= isset($Moteur) ? 'checked' : '' ?>>
		</p>

		<p>
			<label for='Visuel'>Visuel</label>
			<input type='checkbox' name='unCheck' id='Visuel' <?= isset($Visuel) ? 'checked' : '' ?>>
		</p>

		<p>
			<label for='MentalCognitif'>Mental_Cognitif</label>
			<input type='checkbox' name='unCheck' id='MentalCognitif' <?= isset($MentalCognitif) ? 'checked' : '' ?>>
		</p>

		<p>
			<label for='SourdsMalentendants'>Sourds_Malentendants</label>
			<input type='checkbox' name='unCheck' id='SourdsMalentendants' <?= isset($SourdsMalentendants) ? 'checked' : '' ?>>
		</p>
	</div>
	<?php if (isset($_SESSION["id"]) and ($_SESSION["pro_id"] == 1 || $_SESSION["pro_id"] == 2)) { ?>
		<p><a class="btn btn-primary" href="<?= hlien("lecon", "edit", "id", 0) ?>">Nouveau lecon</a></p>
	<?php } ?>
	<table id="matable" class="table table-striped table-bordered table-hover">
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
		<tbody id="contenue">
			<?php
			foreach ($result as $row) {
				extract($row); ?>

				<tr class="<?= Lecon::motCle($lec_id) ?>">

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
	<script src="_js/lecon.js"></script>