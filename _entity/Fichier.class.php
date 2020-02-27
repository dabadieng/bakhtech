<?php
class Fichier extends Entity {
	public function __construct($id=0) {
		parent::__construct("fichier", "fic_id",$id);
	}
}
?>
