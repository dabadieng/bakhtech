<?php

class Ctr_files extends Ctr_controleur {

	public $classTable;

    public function __construct($action) {
        parent::__construct("files", $action);
        $this->table="files";
        $this->classTable = "Files";
        $this->cle = "fil_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		//$result=Files::findAll("files");
		$result=Files::afficherAll("files");
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		
		if (isset($_POST["btSubmit"])) {
			extract($_POST);
			$u=new Files();
			$data=[];
			if (is_uploaded_file($_FILES['fil_src']['tmp_name'])) {
				$fil_name = $_FILES['fil_src']['name'];
				$fil_extension = pathinfo($fil_name, PATHINFO_EXTENSION);
				$fil_size = $_FILES['fil_src']['size'];
				$fil_src = 'D:/Storage/Temp/' . $fil_name;
				$file = $_FILES['fil_src']['tmp_name'];
				move_uploaded_file($file, $fil_src);
			}
			$data['fil_name']=$fil_name;
			$data['fil_extension']=$fil_extension;
			$data['fil_size']=$fil_size;
			$data['fil_src']=$fil_src;
			$data['fil_type']=$fil_type;
			$data['fil_documents']=$fil_documents;
					
			$u->chargerDepuisTableau($data);
			$u->sauver();
			header("location:index.php?m=files");
		} else {				
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$u=new Files($id);
			extract($u->data);	
			require $this->gabarit;
		}
	}
	

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			Files::supprimer("files","fil_id",$_GET["id"]);
		}
		header("location:index.php?m=files");
	}

}

?>