<?php

class Ctr_consulter extends Ctr_controleur {

	public $classTable;

    public function __construct($action) {
        parent::__construct("consulter", $action);
        $this->table="consulter";
        $this->classTable = "Consulter";
        $this->cle = "con_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$result=Consulter::findAll("consulter");
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		if (isset($_POST["btSubmit"])) {
			$u=new Consulter();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
			header("location:index.php?m=consulter");
		} else {				
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$u=new Consulter($id);
			extract($u->data);	
			require $this->gabarit;
		}
	}
	

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			Consulter::supprimer("consulter","con_id",$_GET["id"]);
		}
		header("location:index.php?m=consulter");
	}
}

?>