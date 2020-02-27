        <form method="post" action="<?=hlien("consulter","edit")?>">
		<input type="hidden" name="con_id" id="con_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='con_date_validite'>Date_validite</label>
                            <input id='con_date_validite' name='con_date_validite' type='text' size='50' value='<?=mhe($con_date_validite)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='con_lecon'>Lecon</label>
                            <input id='con_lecon' name='con_lecon' type='text' size='50' value='<?=mhe($con_lecon)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='con_utilisateur'>Utilisateur</label>
                            <input id='con_utilisateur' name='con_utilisateur' type='text' size='50' value='<?=mhe($con_utilisateur)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              