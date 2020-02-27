    <h2>consulter</h2>
    <p><a class="btn btn-primary" href="<?=hlien("consulter","edit","id",0)?>">Nouveau consulter</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Date_validite</th>
			<th>Lecon</th>
			<th>Utilisateur</th><th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $result as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['con_id'])?></td>
			<td><?=mhe($row['con_date_validite'])?></td>
			<td><?=mhe($row['con_lecon'])?></td>
			<td><?=mhe($row['con_utilisateur'])?></td><td><a class="btn btn-warning" href="<?=hlien("consulter","edit","id",$row["con_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("consulter","del","id",$row["con_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>