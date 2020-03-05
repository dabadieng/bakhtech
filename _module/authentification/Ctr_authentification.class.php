<?php

class Ctr_authentification extends Ctr_controleur
{

    public function __construct($action)
    {
        parent::__construct("authentification", $action);
        $a = "a_$action";
        $this->$a();
    }

    public function a_connexion()
    {
        if (isset($_POST["btsubmit"])) {
            extract($_POST);
            $u = new Utilisateur($_POST["uti_id"]);

            if (isset($u->data["uti_id"]) and password_verify($uti_mdp, $u->data["uti_mdp"])) {

                $_SESSION["id"] = $u->data["uti_id"];
                $_SESSION["nom"] = $u->data["uti_nom"];
                $_SESSION["mail"] = $u->data["uti_mail"];
                $_SESSION["pro_id"] = $u->data["uti_profil"];

                $p = new Profil($_SESSION["pro_id"]);
                $_SESSION["profil"] = $p->data["pro_nom"];

                header("location:" . hlien("lecon", "index"));
            } else {
                $u=new Utilisateur(); 
                $_POST["uti_mdp"] = password_hash($uti_mdp); 
                $u->chargerDepuisTableau($_POST); 
                $u->sauver(); 
            }
        } else {
            require $this->gabarit;
        }
    }

    public function a_deconnexion()
    {
        session_destroy();
        header("location:index.php");
    }
}
