        <form method="post" action="<?= hlien("fichier", "edit") ?>">
            <input type="hidden" name="fic_id" id="fic_id" value="<?= $id ?>" />
            <div class='form-group'>
                <label for='fic_nom'>Nom</label>
                <input id='fic_nom' name='fic_nom' type='text' size='50' value='<?= mhe($fic_nom) ?>' class='form-control' />
            </div>
            <div class='form-group'>
                <label for='fic_src'>Src</label>
                <input id='fic_src' name='fic_src' type='file' size='50' value='<?= mhe($fic_src) ?>' class='form-control' />
            </div>
            <div class='form-group'>
                <label for='fic_extension'></label>
                <input id='fic_extension' name='fic_extension' type='hidden' size='50' value='<?= mhe($fic_extension) ?>' class='form-control' />
            </div>
            

            n <input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
        </form>

        <script>
            function getFolder(e) {
                //<input type="fice" id="destination" onchange="getFolder(event)" webkitdirectory mozdirectory msdirectory odirectory directory multiple />
                let fices = e.target.fices;
                let path = fices[0].webkitRelativePath;
                let Folder = path.split("/");
                alert(Folder[0]);
            }

            function afficher() {
                let o = document.getElementById("fic_src");
                let oinfo = document.getElementById("info");
                oinfo.innerHTML += "nom : " + o.fices[0].name + "<br>";
                oinfo.innerHTML += "taille : " + o.fices[0].size + "<br>";
                oinfo.innerHTML += "type : " + o.fices[0].type + "<br>";
                oinfo.focus();
            }
        </script>