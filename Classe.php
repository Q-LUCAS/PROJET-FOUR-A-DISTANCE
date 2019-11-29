<?php

class LABDD
{
    private $serveur = "192.168.65.233";
    private $user = "root";
    private $passwd = "";
    private $nombdd = "lowrence";

    public function connexion()
    {
       try
       {
            $bdd = new PDO("mysql:host=192.168.65.233;dbname=TP_FOUR;charset=utf8", "userweb", "userweb"); //connexion BDD
            return $bdd;
       }

       catch (Exception $e)
        {
            die('Erreur : Connexion impossible');
       }

    }

     
    public function Autorisation($login, $passwd, $connec)
    {
        
       $verif = $connec->prepare("SELECT Login, Password FROM utilisateur WHERE Login = '$login' AND Password= '$passwd'");
       $verif->execute();
       $count = $verif->rowCount();
    }
}
?>
