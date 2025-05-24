<?php

$servername = "localhost";
$dbUsername = "root"; 
$dbPassword = ""; 
$dbname = "education";
$n1 = $_POST['note1'];
$n2 = $_POST['note2'];
$n3 = $_POST['note3'];
$n4 = $_POST['note4'];
$n5 = $_POST['note5'];
$n6 = $_POST['note6'];
$n7 = $_POST['note7'];
$n8 = $_POST['note8'];
$mat = $_POST['matr'];
// // Créer une connexion
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
mysqli_query($conn,"INSERT INTO note_td (matricule,Math_Analysis,OOP,Computer_Engineering,File_Structures,Algebra,Probability,Algorithms,Entrepreneurship) VALUES ('$mat','$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8') ");
header("Location:http://localhost/server/project/html/admin.html");
      exit();  

?>