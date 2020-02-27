        <form method="post" action="<?= hlien("profil", "edit") ?>">
            <input type="hidden" name="pro_id" id="pro_id" value="<?= $id ?>" />
            <fieldset>Veuillez selectionner la thématique souhaitée</fieldset>

            <div class='form-group'>
                <p>
                    <label for='DYS'>DYS</label>
                    <input type='checkbox' name='DYS' id='DYS' <?= isset($DYS) ? 'checked' : '' ?>>
                </p>
            </div>
            <div class='form-group'>
                <p>
                    <label for='Moteur'>Moteur</label>
                    <input type='checkbox' name='Moteur' id='Moteur' <?= isset($Moteur) ? 'checked' : '' ?>>
                </p>
            </div>
            <div class='form-group'>
                <p>
                    <label for='Visuel'>Visuel</label>
                    <input type='checkbox' name='Visuel' id='Visuel' <?= isset($Visuel) ? 'checked' : '' ?>>
                </p>
            </div>
            <div class='form-group'>
                <p>
                    <label for='Mental_Cognitif'>Mental_Cognitif</label>
                    <input type='checkbox' name='Mental_Cognitif' id='Mental_Cognitif' <?= isset($Mental_Cognitif) ? 'checked' : '' ?>>
                </p>
            </div>
            <div class='form-group'>
                <p>
                    <label for='Sourds_Malentendants'>Sourds_Malentendants</label>
                    <input type='checkbox' name='Sourds_Malentendants' id='Sourds_Malentendants' <?= isset($Sourds_Malentendants) ? 'checked' : '' ?>>
                </p>
            </div>


            <input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
        </form>