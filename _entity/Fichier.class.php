<?php
class Fichier extends Entity {
	public function __construct($id=0) {
		parent::__construct("fichier", "fic_id",$id);
	}

	static function fichierById($id) {
		$sql = "select * from fichier, lecon where fic_lecon=lec_id and  fic_lecon=$id"; 
		$result=self::$link->query($sql);
				return $result->fetchAll();		
		}
}
