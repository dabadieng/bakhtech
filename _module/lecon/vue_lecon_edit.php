        <form method="post" action="<?=hlien("lecon","edit")?>">
		<input type="hidden" name="lec_id" id="lec_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='lec_libelle'>Libelle</label>
                            <input id='lec_libelle' name='lec_libelle' type='text' size='50' value='<?=mhe($lec_libelle)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='lec_src'>Src</label>
                            <input id='lec_src' name='lec_src' type='text' size='50' value='<?=mhe($lec_src)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              