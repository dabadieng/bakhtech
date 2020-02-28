    <h2>fichier</h2>
    <p><a class="btn btn-primary" href="<?= hlien("fichier", "edit", "id", 0) ?>">Nouveau fichier</a></p>
    <table class="table table-striped table-bordered table-hover">
    	<thead>
    		<tr>

    			<th>Id</th>
    			<th>Nom</th>
    			<th>Src</th>
    			<th>Extension</th>
    			<th>Lecon</th>
    			<th>modifier</th>
    			<th>supprimer</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php
			foreach ($result as $row) {
				extract($row); ?>
    			<tr>

    				<td><?= mhe($row['fic_id']) ?></td>
    				<td><?= mhe($row['fic_nom']) ?></td>
    				<td><?= mhe($row['fic_src']) ?></td>
    				<td><?= mhe($row['fic_extension']) ?></td>
    				<td><?= mhe($row['fic_lecon']) ?></td>
    				<td><a class="btn btn-warning" href="<?= hlien("fichier", "edit", "id", $row["fic_id"]) ?>">Modifier</a></td>
    				<td><a class="btn btn-danger" href="<?= hlien("fichier", "del", "id", $row["fic_id"]) ?>">Supprimer</a></td>
    			</tr>
    		<?php } ?>
    	</tbody>
    </table>