<?php
    try //va essayer de se connecter à la base dont les informations sont ci-dessous :
    {
        $bdd = new PDO('mysql:host=localhost;dbname=nomdelabase', 'root', 'password', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        //nomdelabase => nom de la base ; root => identifiant utilisateur de la bdd ; password => le mot de passe associé
        //array => mieux vaut ne pas le changer, ça permet de tout passer en UTF8, norme d'encodage universelle
    }
    catch(PDOException $e) //si la connexion est impossible, un message d'erreur sera affiché
    {
        die('Erreur : '.$e->getMessage());
    }
?>