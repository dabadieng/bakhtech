CREATE DATABASE IF NOT EXISTS bakhtech DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE bakhtech;
-- --------------------------------------------------------
set
  foreign_key_checks = 0;
-- CREATION DES TABLES
  DROP TABLE IF EXISTS utilisateur;
CREATE TABLE utilisateur (
    uti_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uti_nom VARCHAR(20),
    uti_mail VARCHAR(20),
    uti_mdp VARCHAR(500),
    uti_profil int
  ) ENGINE = InnoDB;
DROP TABLE IF EXISTS profil;
CREATE TABLE profil(
    pro_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    pro_nom VARCHAR(20)
  ) ENGINE = innoDB;
CREATE TABLE categorie(
    cat_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cat_nom VARCHAR(2000)
  ) ENGINE = innoDB;
DROP TABLE IF EXISTS lecon;
CREATE TABLE lecon(
    lec_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    lec_libelle VARCHAR(2000)
  ) ENGINE = innoDB;
DROP TABLE IF EXISTS appartenir;
CREATE TABLE appartenir(
    app_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    app_lecon int not null,
    app_categorie int Not null
  ) ENGINE = innoDB;

DROP TABLE IF EXISTS fichier;
CREATE TABLE fichier(
    fic_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fic_nom VARCHAR(50),
    fic_src VARCHAR(50),
    fic_extension varchar(10), 
    fic_lecon int
  ) ENGINE = innoDB;

  DROP TABLE IF EXISTS consulter;
CREATE TABLE consulter(
    con_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    con_date_validite date,
    con_lecon int,
    con_utilisateur int
  ) ENGINE = innoDB;

-- CONTRAINTE D'INTEGRITE
SET
  FOREIGN_KEY_CHECKS = 1;
alter table utilisateur add constraint cs1 foreign key (uti_profil) references profil(pro_id);
alter table appartenir add constraint cs2 foreign key (app_lecon) references lecon(lec_id);
alter table appartenir add constraint cs3 foreign key (app_categorie) references categorie(cat_id);
alter table fichier add constraint cs4 foreign key (fic_lecon) references lecon(lec_id);
alter table consulter add constraint cs5 foreign key (con_lecon) references lecon(lec_id);
alter table consulter add constraint cs6 foreign key (con_utilisateur) references utilisateur(uti_id);