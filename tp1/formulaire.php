<?php
//déclaration de la variable nom
$nombre ="nombre";
?>
<!DOCTYPE html>
<html>
    <head><title>Multiplications et additions</title></head>
    <body>
        <h1>Table de Multiplication et d'addition</h1>
        <form name="inscription" method="post" action="Table.php">
            Entrez un chiffre : <input type="0" name="nombre"/> <br/>
            <input type="submit" name="valider" value="OK"/>
        </form>
        <?php
        if(isset($_POST['valider'])){
            $nombre=$_POST['nombre'];
        }
        ?>
    </body>
</html>
