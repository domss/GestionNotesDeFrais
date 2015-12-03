<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=gestion_note_de_frais;charset=utf8', 'root', '');  
        $reponse = $bdd->query('SELECT * FROM gestion_note_de_frais');
       
        if(!empty($_POST["login"]) && !empty($_POST["mdp"]))
        {
            while($donnees = $reponse->fetch()){
            
            if($donnees['login'] == $_POST["login"])
            {
                printf($_POST["login"]);
            }
            }
            
        }
        $reponse.closeCursor();
        $bdd.close();
    } catch (Exception $ex) {
        die('Erreur : ' . $ex->getMessage());
    }
    
?>
