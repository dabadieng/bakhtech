<?php

class Ctr_appartenir extends Ctr_controleur {

	public $classTable;

    public function __construct($action) {
        parent::__construct("appartenir", $action);
        $this->table="appartenir";
        $this->classTable = "Appartenir";
        $this->cle = "app_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$result=Appartenir::findAll("appartenir");
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		if (isset($_POST["btSubmit"])) {
			$u=new Appartenir();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
			header("location:index.php?m=appartenir");
		} else {				
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$u=new Appartenir($id);
			extract($u->data);	
			require $this->gabarit;
		}
	}
	

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			Appartenir::supprimer("appartenir","app_id",$_GET["id"]);
		}
		header("location:index.php?m=appartenir");
	}
}

?>