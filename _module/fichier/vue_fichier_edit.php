<form enctype="multipart/form-data" method="post" id="choix" style="display:none" action="<?= hlien("fichier", "edit") ?>">
    <input type="hidden" name="fic_id" id="fic_id" value="<?= $id ?>" />
    <input type="hidden" name="fic_lecon" id="fic_lecon" value="<?= $fic_lecon ?>" />
    <div class='form-group'>
        <label for='fic_nom'>Nom</label>
        <input id='fic_nom' name='fic_nom' type='text' size='50' value='<?= mhe($fic_nom) ?>' class='form-control' />
    </div>
    <div class='form-group'>
        <label for='fic_src'>Src</label>
        <input id='fic_src' name='fic_src' type='file' accept=".doc, .docx, .txt, .rtf, .pdf, .prc, .mobi, .epub" />
    </div>
    <div class='form-group'>
        <label for='fic_extension'>Extension</label>
        <input id='fic_extension' name='fic_extension' type='hidden' size='50' value='<?= mhe($fic_extension) ?>' class='form-control' />
    </div>


    <input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
</form>

