<?php


// try{
//     $conn=new PDO('mysql:host=localhost;dbname=portfolio', 'root','root');
//     // echo 'Connexion réussie';
// }

// catch(PDOException $e){
//   echo "Erreur : " . $e->getMessage();
// }
$servername = 'localhost';
$username= 'root';
$password = 'root';
$database='portfolio';
$conn = new mysqli($servername, $username, $password, $database);
?>