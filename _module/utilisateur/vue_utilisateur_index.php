    <h2>utilisateur</h2>
    <p><a class="btn btn-primary" href="<?=hlien("utilisateur","edit","id",0)?>">Nouveau utilisateur</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Nom</th>
			<th>Mail</th>
			<th>Mdp</th>
			<th>Profil</th><th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $result as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['uti_id'])?></td>
			<td><?=mhe($row['uti_nom'])?></td>
			<td><?=mhe($row['uti_mail'])?></td>
			<td><?=mhe($row['uti_mdp'])?></td>
			<td><?=mhe($row['uti_profil'])?></td><td><a class="btn btn-warning" href="<?=hlien("utilisateur","edit","id",$row["uti_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("utilisateur","del","id",$row["uti_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>