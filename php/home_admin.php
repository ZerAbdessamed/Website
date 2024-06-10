<?php

session_start();
$matr=$_SESSION['$mat_admin'];
// Configuration de la base de données
$servername = "localhost";
$dbUsername = "root"; // Remplacez par votre nom d'utilisateur MySQL
$dbPassword = ""; // Remplacez par votre mot de passe MySQL
$dbname = "education";

// // Créer une connexion
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
$req=mysqli_query($conn,"SELECT * FROM admin_inf WHERE matricule ='$matr'" );
while($row=mysqli_fetch_assoc($req)){
$fname= $row['first_name'];
$lname= $row['last_name'];
$univ= $row['university'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/server/project/Style/group.css">
    <title>home</title>
</head>
<body>
    <div class="con">
        <div class="name1">
            <p>First name:</p>
            <p>
            <?php
             echo $fname;
            ?>
            </p>
        </div>
        <div class="name2">
            <p>Last name:</p>
            <p>
            <?php
             echo $lname;
            ?>
            </p>
        </div>
        <div class="group">
            <p>University:</p>
            <p>
            <?php
             echo $univ;
            ?>
            </p>
        </div>
        </div>
       </div> 
</body>
</html>