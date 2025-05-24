<?php


$servername = "localhost";
$dbUsername = "root"; 
$dbPassword = "";
$dbname = "education";
$note1 = $_POST['note1'];
$note2 = $_POST['note2'];
$note3 = $_POST['note3'];
$note4 = $_POST['note4'];
$note5 = $_POST['note5'];
$note6 = $_POST['note6'];
$note7 = $_POST['note7'];
$note8 = $_POST['note8'];
$mat = $_POST['matr'];
// // Créer une connexion
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
mysqli_query($conn,"INSERT INTO note_ex (matricule,Math_Analysis,OOP,Computer_Engineering,File_Structures,Algebra,Probability,Algorithms,Entrepreneurship) VALUES ('$mat','$note1','$note2','$note3','$note4','$note5','$note6','$note7','$note8') ");
header("Location:http://localhost/server/project/html/admin.html");
      exit();  
?>