<!DOCTYPE html>
<html>
	<?php
	session_start ();

	if (isset($_SESSION['login']) && isset($_SESSION['mdp'])) 
	{
		?>


		<head>
			<meta charset="utf-8">
			<title>FOUR - ACCEUIL</title>
			<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="icon" type="image/png" href="logo.jpg" />
		</head>

		<body class="site">
			<div class="espace">
				<div class="bienvenue" >
					<h1>BIENVENUE</h1>
					<nav>
						<h2><a href="tab.php" id="site">VOIR LE TABLEAU DES TEMPERATURES</a></h2>
					</nav>
				</div>
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