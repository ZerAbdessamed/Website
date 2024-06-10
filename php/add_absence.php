<?php
// Configuration de la base de données
$servername = "localhost";
$dbUsername = "root"; // Remplacez par votre nom d'utilisateur MySQL
$dbPassword = ""; // Remplacez par votre mot de passe MySQL
$dbname = "education";
$abs1 = $_POST['abs1'];
$abs2 = $_POST['abs2'];
$abs3 = $_POST['abs3'];
$abs4 = $_POST['abs4'];
$abs5 = $_POST['abs5'];
$abs6 = $_POST['abs6'];
$abs7 = $_POST['abs7'];
$abs8 = $_POST['abs8'];
$mat = $_POST['matr'];
// // Créer une connexion
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
mysqli_query($conn,"INSERT INTO  absence( matricule,Math_Analysis,OOP,Computer_Engineering,File_Structures,Algebra,Probability,Algorithms,Entrepreneurship) VALUES ('$mat','$abs1','$abs2','$abs3','$abs4','$abs5','$abs6','$abs7','$abs8')");
header("Location:http://localhost/server/project/html/admin.html");
      exit();  

?>