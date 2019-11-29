<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FOUR - ACCEUIL</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<?php include("Classe.php");?>	
	</head>

	<body>
		
		<?php 
		$login = $_POST["login"];
		$passwd = $_POST["mdp"];
		
		$BDD = new LABDD;
		$connec = $BDD->connexion();

		$connexion = $BDD->Autorisation($login, $passwd, $connec);

		if ($_POST["login"] == "ProjFOUR" && $_POST["mdp"] == "ProjFOUR")
		{
			session_start ();
			$_SESSION['login'] = $_POST['login'];
			$_SESSION['mdp'] = $_POST['mdp'];

			echo "Vous etes connecté";			
			header('Location: acceuil.php');

		}
		else
		{
			echo "Ce n'est pas les bons logs";
			header('Location: index.php');
		}
?>			
	</body>
</html>