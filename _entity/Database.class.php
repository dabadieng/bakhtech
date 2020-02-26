<?php
class Database
{

    static public function creer(string $sqlfile): string
    {
        $sql = file_get_contents($sqlfile);
        Entity::$link->setAttribute(PDO::ATTR_EMULATE_PREPARES, 0);
        Entity::$link->exec($sql);
        return $sql;
    }

    static public function genererUtilisateur(int $nbuser, int $nbprofil): int
    {
        $sql = "insert into utilisateur values ";
        $data = [];
        for ($i = 1; $i <= $nbuser; $i++) {
            $uti_nom = "nom n°$i";
            $uti_mail = $uti_nom . "_" . $i . "@mail.fr";
            $uti_mdp = password_hash($uti_nom, PASSWORD_ARGON2I);
            $uti_profil = rand(1, $nbprofil);

            $data[] = "(null,'$uti_nom','$uti_mail','$uti_mdp','$uti_profil')";
        }

        return Entity::$link->exec($sql . implode(",", $data));
    }

    static public function genererProfil(): int
    {
        $sql = "insert into profil values ";
        $data = [];
        $data[] = "(null,'Administrateur')";
        $data[] = "(null,'Gestionnaire')";
        $data[] = "(null,'utilisateur')";

        return Entity::$link->exec($sql . implode(",", $data));
    }

    static public function genererCategorie(): int
    {
        $sql = "insert into categorie values ";
        $data = [];
        $data[] = "(null,'Dys')";
        $data[] = "(null,'Moteur')";
        $data[] = "(null,'Visuel')";
        $data[] = "(null,'MentalCognitif')";
        $data[] = "(null,'SourdsMalentendants')";

        return Entity::$link->exec($sql . implode(",", $data));
    }

    static public function genererLecon(): int
    {
        $sql = "insert into lecon values ";
        $data = [];
        $data[] = "(null,'Introduction')";
        $data[] = "(null,'Généralité')";
        $data[] = "(null,'handicap visuel les bonnes pratiques')";
        $data[] = "(null,'handicap moteur les bonnes pratiques')";

        return Entity::$link->exec($sql . implode(",", $data));
    }
}
