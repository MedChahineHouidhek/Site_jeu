<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="site_jeu";

$conn=new mysqli($hostname,$username,$password,$dbname);
if(!$conn){
    die('Erreur : ' .mysqli_connect_error());
}
echo 'Connexion réussie';




?>