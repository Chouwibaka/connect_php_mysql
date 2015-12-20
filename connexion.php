<?php
    try //va essayer de se connecter � la base dont les informations sont ci-dessous :
    {
        $bdd = new PDO('mysql:host=localhost;dbname=nomdelabase', 'root', 'password', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        //nomdelabase => nom de la base ; root => identifiant utilisateur de la bdd ; password => le mot de passe associ�
        //array => mieux vaut ne pas le changer, �a permet de tout passer en UTF8, norme d'encodage universelle
    }
    catch(PDOException $e) //si la connexion est impossible, un message d'erreur sera affich�
    {
        die('Erreur : '.$e->getMessage());
    }
?>