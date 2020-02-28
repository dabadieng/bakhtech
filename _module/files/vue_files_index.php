    <h2>files</h2>
    <p><a class="btn btn-primary" href="<?=hlien("files","edit","id",0)?>">Add files</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Name</th>
			<th>Extension</th>
			<th>Size(Ko)</th>
			<th>Type</th>
			<th>Src</th>
			<th>Documents</th>
			<th>User</th>
			<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $result as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['fil_id'])?></td>
			<td><?=mhe($row['fil_name'])?></td>
			<td><?=mhe($row['fil_extension'])?></td>
			<td><?=mhe($row['fil_size'])?></td>
			<td><?=mhe($row['fil_type'])?></td>
			<td><?=mhe($row['fil_src'])?></td>
			<td><?=mhe($row['doc_label'])?></td>
			<td><?=mhe($row['use_username'])?></td>
			<td><a class="btn btn-danger" href="<?=hlien("files","del","id",$row["fil_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>