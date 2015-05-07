<?php
//déclaration de la variable nom
$nombre = $_POST["nombre"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Table de multiplication et d'addition</title>
    </head>
    <body>
        <h1>Table de Multiplication</h1>
        <table border="1" width="400">
        <?php
        // Nombre de colonne et de ligne en fonction de la variable
        $NbrCol 	= $nombre;
        $NbrLigne 	= $nombre;
        ?>
        <thead>
            <th>
        <?php for ($j=1; $j<$NbrCol; $j++) { ?>
            <td style="background:#FFFF66;"><?php echo $j; ?></td>
        <?php	} ?>
            </th>
        </thead>

        <tbody>
        <?php
        // lignes suivantes
        for ($i=1; $i<$NbrLigne; $i++) { 
        ?>
        <tr>
        <?php		for ($j=1; $j<$NbrCol; $j++) {
            // 1ere colonne 
			if ($j==1) { 
        ?>		<td style="background:#FFFF66;"><?php echo $i; ?></td>
        <?php			}
            // colonnes suivantes
			if ($i==$j) {
        ?>		<td>
        <?php			} else {
        // Déclarattion des variables suivantes   
        $hex= ($j*$i);
        $convert = base_convert($hex, 10, $nombre);
        ?>		<td>
        <?php }
        
		// données à afficher dans la cellule
		echo $convert;
        ?>		</td>
        <?php	} 
        ?>
        </tr>
        <?php	$j=1;
        }
        ?>
        </tbody>
        </table>
        <br>
        <br>
        <br>
        <h1>Table d'addition</h1>
                <table border="1" width="400">
        <?php
        // Nombre de colonne et de ligne en fonction de la variable
        $NbrCol 	= $nombre;
        $NbrLigne 	= $nombre;
        ?>
        <thead>
            <th>
        <?php	        for ($j=1; $j<$NbrCol; $j++) { ?>
            <td style="background:#FFFF66;"><?php echo $j; ?></td>
        <?php	} ?>
            </th>
        </thead>

        <tbody>
        <?php
            // lignes suivantes
            for ($i=1; $i<$NbrLigne; $i++) { 
        ?>
            <tr>
        <?php		for ($j=1; $j<$NbrCol; $j++) {
            // 1ere colonne 
			if ($j==1) { 
        ?>		<td style="background:#FFFF66;"><?php echo $i; ?></td>
        <?php			}
            // colonnes suivantes
			if ($i==$j) {
        ?>		<td>
        <?php			} else {
            
            
        $hex= ($j+$i);
        $convert = base_convert($hex, 10, $nombre);
        ?>		<td>
        <?php			}

		// données à afficher dans la cellule
		echo $convert;
        ?>		</td>
        <?php	} 
        ?>
	</tr>
        <?php	$j=1;
        }   
        ?>
        </tbody>
        </table>


    </body>
</html>
