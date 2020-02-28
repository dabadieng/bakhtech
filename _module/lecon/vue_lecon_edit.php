        <form method="post" action="<?= hlien("lecon", "edit") ?>">
            <input type="hidden" name="lec_id" id="lec_id" value="<?= $id ?>" />
            <div class='form-group'>
                <label for='lec_libelle'>Libelle</label>
                <input id='lec_libelle' name='lec_libelle' type='text' size='50' value='<?= mhe($lec_libelle) ?>' class='form-control' />
            </div>
            <div id="choix">

                <p>
                    <label for='Dys'>Dys</label>
                    <input type='checkbox' name='Dys' id='Dys' <?= isset($Dys) ? 'checked' : '' ?>>
                </p>

                <p>
                    <label for='Moteur'>Moteur</label>
                    <input type='checkbox' name='Moteur' id='Moteur' <?= isset($Moteur) ? 'checked' : '' ?>>
                </p>

                <p>
                    <label for='Visuel'>Visuel</label>
                    <input type='checkbox' name='Visuel' id='Visuel' <?= isset($Visuel) ? 'checked' : '' ?>>
                </p>

                <p>
                    <label for='Mental_Cognitif'>Mental_Cognitif</label>
                    <input type='checkbox' name='Mental_Cognitif' id='Mental_Cognitif' <?= isset($Mental_Cognitif) ? 'checked' : '' ?>>
                </p>

                <p>
                    <label for='Sourds_Malentendants'>Sourds_Malentendants</label>
                    <input type='checkbox' name='Sourds_Malentendants' id='Sourds_Malentendants' <?= isset($Sourds_Malentendants) ? 'checked' : '' ?>>
                </p>

            </div>
            <input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
        </form>