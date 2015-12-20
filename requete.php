<?php
    include_once('connexion.php'); //inclus le fichier de connexion sur la page. Le 'once' 
                                    //permet de ne pas inclure plusieurs fois 
                                    //le fichier connexion.php dans une page
    
    //connexion et ex�cution de la requ�te
    
    global $bdd; //la variable $bdd contenant la connexion est une variable globale pr�sente dans un autre fichier.
    $req = $bdd -> prepare('SELECT * from table'); //exemple de requ�te, toutes les requ�tes passent par un 'prepare'
                                                    //la syntaxe $bdd->prepare est l� parce que $bdd est un r�alit� un objet PDO 
                                                    //auquel on applique la m�thode 'prepare' qui sert � pr�parer la requ�te
    $req -> execute(); //$req est devenu un objet PDO, auquel on applique la m�thode 'execute' pour ex�cuter la requ�te
    $result = $req -> fetchAll(); //permet de mettre sous forme de tableau associatif. Peut �tre remplac� par 'fetch()' pour une ligne 
                                    //avec plusieurs colonnes, fetchColumn s'il n'y a qu'une colonne, d'une seule ligne
    
    
    //traitement des donn�es r�cup�r�es
    
    var_dump($result); // ligne non obligatoire, ici pr�sente pour montrer le tableau pr�sent dans $result
    
    foreach ($result as $uneLigne): //pour chaque ligne du r�sultat (si il y a plusieurs lignes), on fait un traitement
        $var1 = $uneLigne['case1']; //les champs 'case1' et 'case2' de la base de donn�es sont accessibles comme ceci
        $var2 = $uneLigne['case2'];
    endforeach;
    
    $var3 = $result['case1']; //r�cup�ration apr�s un fetch. Une seule ligne, donc donn�es directement r�cup�rables
    $var4 = $result['case2'];
    
    $var5 = $result; // r�cup�ration apr�s un fetchColumn
    
?>