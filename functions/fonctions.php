<?php 
require_once"./config/connexion.php";
function getAllUsers(){
    global $conn;
    $querry=mysqli_query($conn,"SELECT * FROM user");
    $users= mysqli_fetch_assoc($querry);
    return $users ; 
}



?>