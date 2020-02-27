<?php

class Ctr_fichier extends Ctr_controleur {

	public $classTable;

    public function __construct($action) {
        parent::__construct("fichier", $action);
        $this->table="fichier";
        $this->classTable = "Fichier";
        $this->cle = "fic_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$result=Fichier::findAll("fichier");
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		if (isset($_POST["btSubmit"])) {
			$u=new Fichier();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
			header("location:index.php?m=fichier");
		} else {				
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$u=new Fichier($id);
			extract($u->data);	
			require $this->gabarit;
		}
	}
	

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			Fichier::supprimer("fichier","fic_id",$_GET["id"]);
		}
		header("location:index.php?m=fichier");
	}
}

?>