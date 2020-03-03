 <h1>Leçon : <?= $lec_libelle ?></h1>
 <form method="post" action="<?= hlien("lecon", "edit") ?>">
     <input type="hidden" name="lec_id" id="lec_id" value="<?= $id ?>" />
     <div class='form-group'>
         <label for='lec_libelle'>Libelle</label>
         <input id='lec_libelle' name='lec_libelle' type='text' size='50' value='<?= mhe($lec_libelle) ?>' class='form-control' />
     </div>

     <div id="theme">

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

     <input class="btn btn-success" type="submit" name="btSubmit" value="Modifier" />

 </form>
 <button id="fichier" style="display: block" onclick="ajouter()">Inserer des fichiers</button>

 <div id="contenu" style="display:none">
     <?php
        foreach ($result as $row) {
            extract($row); ?>
         <ul>
             <li> <?= $fic_src ?> <a href="<?= hlien("fichier", "del", "id", $row["fic_id"]) ?>">Supprimer</a></li>
         </ul>

     <?php } ?>


     <form enctype="multipart/form-data" method="post" id="choix" style="display:none" action="<?= hlien("fichier", "edit") ?>">
         <input type="hidden" name="fic_id" id="fic_id" value=0 />
         <input type="hidden" name="fic_lecon" id="fic_lecon" value="<?= $fic_lecon ?>" />

         <div class='form-group'>
             <label for='fic_nom'>Nom</label>
             <input id='fic_nom' name='fic_nom' type='text' size='50' value='<?= mhe($fic_nom) ?>' class='form-control' />
         </div>
         <div class='form-group'>
             <label for='fic_src'>Src</label>
             <input id='fic_src' name='fic_src' type='file' />
         </div>
         <div class='form-group'>
             <label for='fic_extension'>Extension</label>
             <input id='fic_extension' name='fic_extension' type='type' size='50' value='<?= mhe($fic_extension) ?>' class='form-control' />
         </div>


         <input class="btn btn-success" type="submit" name="btSubmitFichier" value="Ajouter des fichiers" />
     </form>
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