<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="site_jeu";

$conn=mysqli_connect($hostname,$username,$password,$dbname);
// pour cconnecter a +ieurs db
//$mysqli=mysqli_connect($hostname,$username,$password);
//$conn=mysqli_select_db($mysqli,$dbname);
if(!$conn){
    die('Erreur : ' .mysqli_connect_error());
}
echo 'Connexion réussie';






?>