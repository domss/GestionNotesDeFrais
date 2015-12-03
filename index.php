<!DOCTYPE html>
use PDO;
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=gestion_note_de_frais;charset=utf8', 'root', '');    
    } catch (Exception $ex) {
        die('Erreur : ' . $ex->getMessage());
    } 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            <table>
                <tr>
                    <td align="left" >Login</td> 
                    <th><input name="login" type="text" required></th>                
                </tr>
                <tr>
                    <th align="left">Mot de passe</th>            
                   <th><input name="mdp" type="password" required></th>                
                </tr>
                <tr>
                                 
                </tr>
                <tr>
                   <th><input type="submit" value="Connexion"></th>    
                   <th><a href="inscription.php"><input type="button" value="Inscription"></a></th>    
                </tr>
            </table>
            
        </form>
            
         HELLO
            
        <?php
        // put your code here
        ?>
    </body>
</html>
