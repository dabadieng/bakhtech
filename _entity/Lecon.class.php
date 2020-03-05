<?php
class Lecon extends Entity
{
	public function __construct($id = 0)
	{
		parent::__construct("lecon", "lec_id", $id);
	}

	static function findAll($table)
	{
		$sql = "select * from appartenir, lecon where app_lecon=lec_id";
		$result = self::$link->query($sql);
		return $result->fetchAll();
	}

	static function motCle($id)
	{
		$sql = "select cat_nom from categorie, appartenir where app_categorie=cat_id and app_lecon=$id";
		$result = self::$link->query($sql);

		$tab = $result->fetchAll();
		$chaine = "";
		foreach ($tab as $valeur) {
			$chaine .= $valeur["cat_nom"] . " ";
		}
		return $chaine;
	}
}
