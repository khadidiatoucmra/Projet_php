<?php
$serveur="localhost";
$port="8889";
$user="root";
$pwd="root";
$dbname="Gestion";
$connexion=mysqli_connect($serveur,$port,$user,$pwd,$dbname);

if(!$connexion){
    echo "Erreur de connexion";
}else{
    //echo "Succes";
}

 


?>