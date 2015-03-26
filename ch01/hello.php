<!DOCTYPE html>
<?php
/**
 *Ce script est notre premier, yen a pas  deux comme lui
 *@author rgd
 *@date 2015.02.19
 */
 //Variables
 $non_nom='';
 $adresse_email='';
 $votre_age=17;
 
 $var='var1';
 $Var='var2';
 
 echo "$var $Var";
 
 echo strlen($var),
 echo STRLEN($Var);

 //Constantes
 define('SERVER', 'localhos');
 //Debut du code
 echo "mon no  est:$mon_nom";
 //Fin du code
?>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Ma premiere page</title>
    </head>
    <Body>
        
        <p>tant qu-on est pas dans du code php,
        
        <br>
        c'est ligne seront impimees telles quelles</p> 

        <?php
        //Selon la demande numero 234 du client, nous devons etre poli
        echo "bonjour de la commande echo/n";
        //#123 : longueur maximale testee
        if($longueur_nom > 50){
            echo "Nom trop long";
        }
        ?>
        <br>
        Et encore une autre ligne
    </Body>
</html>
