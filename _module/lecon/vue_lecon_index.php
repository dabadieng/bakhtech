    <h2>lecon</h2>
    <p><a class="btn btn-primary" href="<?= hlien("lecon", "edit", "id", 0) ?>">Nouveau lecon</a></p>
    <table class="table table-striped table-bordered table-hover">
    	<thead>
    		<tr>

    			<th>Id</th>
    			<th>Libelle</th>
    			<th>modifier</th>
    			<th>supprimer</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php
			foreach ($result as $row) {
				extract($row); ?>
    			<tr>

    				<td><?= mhe($row['lec_id']) ?></td>
					<td><a href="fichier/<?= mhe($row['lec_id']) ?>.html"><?= mhe($row['lec_libelle']) ?></a></td>
    				<td><a class="btn btn-warning" href="<?= hlien("lecon", "edit", "id", $row["lec_id"]) ?>">Modifier</a></td>
    				<td><a class="btn btn-danger" href="<?= hlien("lecon", "del", "id", $row["lec_id"]) ?>">Supprimer</a></td>
    			</tr>
    		<?php } ?>
    	</tbody>
    </table>
    