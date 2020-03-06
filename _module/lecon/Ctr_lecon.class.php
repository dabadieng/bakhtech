<?php

class Ctr_lecon extends Ctr_controleur
{

	public $classTable;

	public function __construct($action)
	{
		parent::__construct("lecon", $action);
		$this->table = "lecon";
		$this->classTable = "Lecon";
		$this->cle = "lec_id";
		$a = "a_$action";
		$this->$a();
	}

	function a_index()
	{
		$result = Lecon::findAll("lecon");
		require $this->gabarit;
	}

	//$_GET["id"] : id de l'enregistrement
	function a_edit()
	{
		if (isset($_POST["btSubmit"])) {
			extract($_POST);
			//var_dump($_POST);
			//var_dump($_FILES);

			$u = new Lecon();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();

			// chargement d'un fichier dans la base 
			$_POST["fic_lecon"] = $u->data["lec_id"]; 
			//var_dump($_POST); 
			$f = new Fichier();
			$f->chargerDepuisTableau($_POST);
			$f->sauver();

			// chargement de ce fichier dans l'arborescence 
			if (is_uploaded_file($_FILES['fic_src']['tmp_name'])) {
				$fichier = $_FILES['fic_src']['name'];
				move_uploaded_file($_FILES['fic_src']['tmp_name'], "D:/informatique/2-PHP/tuto/mvc/bakhtech/www/fichier/" . $f->data["fic_lecon"] . "." . $fic_extension);
			}

			if ($_POST["lec_id"] == 0) {
				// crée un fichier en respectant le nomage id.html			
				$file = $u->data["lec_id"] . ".html";
				$creation = fopen("D:/informatique/2-PHP/tuto/mvc/bakhtech/www/fichier/$file", 'x');
				fclose($creation);
			}


			header("location:index.php?m=lecon");

		} else {
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$result = Fichier::fichierById($id);
			$u = new Lecon($id);
			extract($u->data);
			$f = new Fichier();
			extract($f->data);
			require $this->gabarit;
		}
	}


	//param GET id 
	function a_del()
	{
		if (isset($_GET["id"])) {
			Lecon::supprimer("lecon", "lec_id", $_GET["id"]);
		}
		header("location:index.php?m=lecon");
	}
}
