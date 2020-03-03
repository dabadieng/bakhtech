    <h2>appartenir</h2>
    <p><a class="btn btn-primary" href="<?=hlien("appartenir","edit","id",0)?>">Nouveau appartenir</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Lecon</th>
			<th>Categorie</th><th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $result as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['app_id'])?></td>
			<td><?=mhe($row['app_lecon'])?></td>
			<td><?=mhe($row['app_categorie'])?></td><td><a class="btn btn-warning" href="<?=hlien("appartenir","edit","id",$row["app_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("appartenir","del","id",$row["app_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>