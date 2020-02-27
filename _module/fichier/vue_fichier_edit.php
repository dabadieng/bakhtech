        <form method="post" action="<?=hlien("fichier","edit")?>">
		<input type="hidden" name="fic_id" id="fic_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='fic_nom'>Nom</label>
                            <input id='fic_nom' name='fic_nom' type='text' size='50' value='<?=mhe($fic_nom)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='fic_src'>Src</label>
                            <input id='fic_src' name='fic_src' type='text' size='50' value='<?=mhe($fic_src)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='fic_lecon'>Lecon</label>
                            <input id='fic_lecon' name='fic_lecon' type='text' size='50' value='<?=mhe($fic_lecon)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              