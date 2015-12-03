<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->




<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div >
        <form action="test.php" method="post">
            <table>
                <tr>
                    <td align="left">Nom</td> 
                    <th><input name="nom" type="text" required/></th>                
                </tr>
                <tr>
                    <th align="left">Prenom</th>            
                    <th><input name="prenom" type="text" required/></th>                
                </tr>
                <tr>
                    <td align="left">Login</td> 
                    <th><input name="login" type="text" required/></th>                
                </tr>
                <tr>
                    <th align="left">Mot de passe</th>            
                   <th><input name="mdp" type="password" required/></th>                
                </tr>
                <tr>
                    <th align="left">Email</th>                   
                    <th>
                        <select>
                            <option name="profil" value="admin">administrateur</option>
                            <option name="profil" value="employe">employé</option>
                            <option name="profil" value="manager">manager</option>
                        </select>
                    </th>               
                </tr>
                <tr>
                   <th><input type="submit" value="Inscription"></th>    
                </tr>
            </table>
            
        </form>     
        </div>
    </body>
</html>


