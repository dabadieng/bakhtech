<?php

class Ctr_fichier extends Ctr_controleur
{

	public $classTable;

	public function __construct($action)
	{
		parent::__construct("fichier", $action);
		$this->table = "fichier";
		$this->classTable = "Fichier";
		$this->cle = "fic_id";
		$a = "a_$action";
		$this->$a();
	}

	public function functionName()
	{
		throw new Exception('Method not implemented');
	}

	function a_index()
	{
		$result = Fichier::findAll("fichier");
		require $this->gabarit;
	}

	//$_GET["id"] : id de l'enregistrement
	function a_edit()
	{
		if (isset($_POST["btSubmitFichier"])) {
			//var_dump($_POST);
			//var_dump($_FILES);

			// chargement d'un fichier dans la base 
			extract($_POST);
			$f = new Fichier();
			$f->chargerDepuisTableau($_POST);
			$f->sauver();

			// chargement de ce fichier dans l'arborescence 
			if (is_uploaded_file($_FILES['fic_src']['tmp_name'])) {
				$fichier = $_FILES['fic_src']['name'];
				move_uploaded_file($_FILES['fic_src']['tmp_name'], "D:/informatique/2-PHP/tuto/mvc/bakhtech/www/fichier/" . $f->data["fic_lecon"] . "." . $fic_extension);
			}

			//maj des catégories 
			$a = new Appartenir(); 


			header("location:index.php?m=fichier");
		} else if (isset($_POST["btSubmit"])) {
			extract($_POST);


			$u = new Fichier();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();

			if (is_uploaded_file($_FILES['fic_src']['tmp_name'])) {
				$fichier = $_FILES['fic_src']['name'];
				move_uploaded_file($_FILES['fic_src']['tmp_name'], "D:/informatique/2-PHP/tuto/mvc/bakhtech/www/fichier/" . $f->data["fic_lecon"] . "." . $fic_extension);
			}


			//header("location:index.php?m=fichier");
		} else {
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$u = new Fichier($id);
			extract($u->data);
			require $this->gabarit;
		}
	}


	//param GET id 
	function a_del()
	{
		if (isset($_GET["id"])) {
			Fichier::supprimer("fichier", "fic_id", $_GET["id"]);
		}
		header("location:index.php?m=fichier");
	}
}
