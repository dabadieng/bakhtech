<?php
class Categorie extends Entity {
	public function __construct($id=0) {
		parent::__construct("categorie", "cat_id",$id);
	}
}
?>
