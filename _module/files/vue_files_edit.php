        <form method="post" enctype="multipart/form-data" action="<?= hlien("fices", "edit") ?>">
            <input type="hidden" name="fic_id" id="fic_id" value="<?= $id ?>" />
            <div class='form-group'>
                <label for='fic_nom'></label>
                <input id='fic_nom' name='fic_nom' type='hidden' size='50' value='<?= mhe($fic_nom) ?>' class='form-control' />
                          
                <label for='fic_extension'></label>
                <input id='fic_extension' name='fic_extension' type='hidden' size='50' value='<?= mhe($fic_extension) ?>' class='form-control' />
            
            
                <label for='fic_size'></label>
                <input id='fic_size' name='fic_size' type='hidden' size='50' value='<?= mhe($fic_size) ?>' class='form-control' />
            
            
                <label for='fic_type'>Type</label>
                <input id='fic_type' name='fic_type' type='text' size='50' value='<?= mhe($fic_type) ?>' class='form-control' />
            </div>
            <div class='form-group'>
                <label for='fic_src'>SRC</label>
                <input id='fic_src' name='fic_src' type='fice' size='50'  class='form-control' value='<?= mhe($fic_src) ?>'onchange="afficher()"/>
            </div>
            
            <br>
            <span id="info"></span><BR>
            <br>

            <input class="btn btn-success" type="submit" name="choose" value="Choose" />
            <div class='form-group'>
                <label for='fic_documents'>Add for document:</label>
                <select class='form-control' id='fic_documents' name='fic_documents'>
                    <?= Entity::HTMLselect("select * from documents", "doc_id", "doc_label", $fic_documents) ?>
                </select>
            </div>
            <p> or </p>
            <p><a class="btn btn-primary" href="<?= hlien("documents", "edit", "id", 0) ?>">Create new document</a></p>
            <br>

            <input class="btn btn-success" type="submit" name="btSubmit" value="Upload" />
        </form>
        <script>
            function getFolder(e) {
                //<input type="fice" id="destination" onchange="getFolder(event)" webkitdirectory mozdirectory msdirectory odirectory directory multiple />
                let fices = e.target.fices;
                let path = fices[0].webkitRelativePath;
                let Folder = path.split("/");
                alert(Folder[0]);
            }
            function afficher()	{
		    let o=document.getElementById("fic_src");
	    	let oinfo=document.getElementById("info");
		    oinfo.innerHTML +="nom : " + o.fices[0].name + "<br>";
		    oinfo.innerHTML +="taille : " + o.fices[0].size + "<br>";
		    oinfo.innerHTML +="type : " + o.fices[0].type + "<br>";
		    oinfo.focus();
	}
        </script>