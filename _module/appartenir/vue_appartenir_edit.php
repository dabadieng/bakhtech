        <form method="post" action="<?=hlien("appartenir","edit")?>">
		<input type="hidden" name="app_id" id="app_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='app_lecon'>Lecon</label>
                            <input id='app_lecon' name='app_lecon' type='text' size='50' value='<?=mhe($app_lecon)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='app_categorie'>Categorie</label>
                            <input id='app_categorie' name='app_categorie' type='text' size='50' value='<?=mhe($app_categorie)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              