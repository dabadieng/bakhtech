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
		//recupère les fichiers rattachés à la leçon 
		//$result=Fichier::fichierById($id); 

		if (isset($_POST["btSubmitFichier"])) {
			extract($_POST); 

		} else if (isset($_POST["btSubmit"])) {
			var_dump($_POST);

			$u = new Lecon();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();


			// crée un fichier en respectant le nomage id.html			
			$file = $u->data["lec_id"] . ".html";
			$creation = fopen("D:/informatique/2-PHP/tuto/mvc/bakhtech/www/fichier/$file", 'x');



			header("location:index.php?m=lecon");
			//header("location:index.php?m=fichier&a=edit");



		} else {
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$result=Fichier::fichierById($id); 
			$u = new Lecon($id);
			extract($u->data);
			$f=new Fichier(); 
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
