<!DOCTYPE html>
<html>
    <?php
        session_start ();

        if (isset($_SESSION['login']) && isset($_SESSION['mdp'])) 
        {
            ?>
	<head>
        <meta charset="utf-8">
        <title>FOUR - TABLEAU DE TEMPERATURES</title>
		<link rel="icon" type="image/png" href="logo.jpg" />
        <link rel="stylesheet" type="text/css" href="style.css">
		<?php include('Classe.php') ?>

        
	</head>

	<body class="site">		
		<?php
			$BDD = new LABDD;
			$connec = $BDD->connexion(); 
    	?>

        <div class="espace">
            <table class="tab">
                <tr>
                    <th class="case">NUMERO DE LA TEMPERATURE</th>
                    <th class="case">TEMPERATURE (EN °C)</th>
                </tr>
            
                <?php
                    $reqTab	=	$connec->query('SELECT `idTemp`, `Temp` FROM `Températures`');
                            $NbreDataTab = $reqTab->rowCount();
                            $rowAllTab = $reqTab->fetchAll();
                ?>

                <?php
                    // pour chaque ligne (chaque enregistrement)
                    foreach ( $rowAllTab as $row ) 
                    {
                    // DONNEES A AFFICHER dans chaque cellule de la ligne
                ?>

                <tr>
                    <td class="ligne"><?php echo $row['idTemp']; ?></td>
                    <td class="ligne"><?php echo $row['Temp']; ?></td>
                </tr>
                
                <?php
                    } // fin foreach
                ?>
            </table>
        </div>				
    </body>
    
    <?php
	}
	else {
		?>
		<div class="erreur"> 
			<?php
				echo "VOUS N'ETES PAS CONNECTE !";
			?>
		</div>
		<?php
	}
	?>
</html>