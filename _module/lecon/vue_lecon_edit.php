 <h1>Leçon : <?= $lec_libelle ?></h1>
 <form enctype="multipart/form-data" method="post" action="<?= hlien("lecon", "edit") ?>">
     <input type="hidden" name="lec_id" id="lec_id" value="<?= $id ?>" />
     <input type="hidden" name="fic_id" id="fic_id" value=0 />
     <input type="hidden" name="fic_lecon" id="fic_lecon" value="<?= $lec_id ?>" />

     <div class='form-group'>
         <label for='lec_libelle'>Libelle</label>
         <input id='lec_libelle' name='lec_libelle' type='text' size='50' value='<?= mhe($lec_libelle) ?>' class='form-control' />
     </div>


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
         <input id='fic_extension' name='fic_extension' type='type' size='50' value='<?= mhe($fic_extension) ?>' class='form-control' />
     </div>


     <input class="btn btn-success" type="submit" name="btSubmit" value="Valider" />
 </form>

 <div id="contenu" style="display:none">
     <?php
        foreach ($result as $row) {
            extract($row); ?>
         <ul>
             <li> <?= $fic_src ?> <a href="<?= hlien("fichier", "del", "id", $row["fic_id"]) ?>">Supprimer</a></li>
         </ul>

     <?php } ?>



     <script>
         let choix = document.getElementById("choix");
         let lec_id = document.getElementById("lec_id");
         let fic_lecon = document.getElementById("fic_lecon");



         function ajouter() {
             $("#choix").toggle();
             $("#contenu").toggle();
             $("#fichier").toggle();
         }
     </script>