<?php
    include_once('connexion.php'); //inclus le fichier de connexion sur la page. Le 'once' 
                                    //permet de ne pas inclure plusieurs fois 
                                    //le fichier connexion.php dans une page
    
    //connexion et exécution de la requête
    
    global $bdd; //la variable $bdd contenant la connexion est une variable globale présente dans un autre fichier.
    $req = $bdd -> prepare('SELECT * from table'); //exemple de requête, toutes les requêtes passent par un 'prepare'
                                                    //la syntaxe $bdd->prepare est là parce que $bdd est un réalité un objet PDO 
                                                    //auquel on applique la méthode 'prepare' qui sert à préparer la requête
    $req -> execute(); //$req est devenu un objet PDO, auquel on applique la méthode 'execute' pour exécuter la requête
    $result = $req -> fetchAll(); //permet de mettre sous forme de tableau associatif. Peut être remplacé par 'fetch()' pour une ligne 
                                    //avec plusieurs colonnes, fetchColumn s'il n'y a qu'une colonne, d'une seule ligne
    
    
    //traitement des données récupérées
    
    var_dump($result); // ligne non obligatoire, ici présente pour montrer le tableau présent dans $result
    
    foreach ($result as $uneLigne): //pour chaque ligne du résultat (si il y a plusieurs lignes), on fait un traitement
        $var1 = $uneLigne['case1']; //les champs 'case1' et 'case2' de la base de données sont accessibles comme ceci
        $var2 = $uneLigne['case2'];
    endforeach;
    
    $var3 = $result['case1']; //récupération après un fetch. Une seule ligne, donc données directement récupérables
    $var4 = $result['case2'];
    
    $var5 = $result; // récupération après un fetchColumn
    
?>