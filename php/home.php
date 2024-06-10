<?php

session_start();
$matr=$_SESSION['$mat'];
// Configuration de la base de données
$servername = "localhost";
$dbUsername = "root"; // Remplacez par votre nom d'utilisateur MySQL
$dbPassword = ""; // Remplacez par votre mot de passe MySQL
$dbname = "education";


// // Créer une connexion
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
$req=mysqli_query($conn,"SELECT * FROM student_inf WHERE matricule ='$matr'" );
while($row=mysqli_fetch_assoc($req)){
$fname= $row['first_name'];
$lname= $row['last_name'];
$date= $row['date_birth'];
$univ= $row['university'];
$speciality=$row['speciality'];
$cycle=$row['cycle'];
$lev= $row['level'];
$group= $row['group'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/server/project/Style/home.css">
    <title>Home</title>
</head>
<body>
   <div class="con">
    <div class="name1">
        <p>First name:</p>
        <p>  
          <?php
             echo $fname ;
            ?>
            </p>
    </div>
    <div class="name2">
        <p>Last name:</p>
        <p>
        <?php
             echo $lname ;
            ?>
        </p>
    </div>
    <div class="date">
        <p>Date of birth:</p>
        <p>
        <?php
             echo $date;
            ?>
        </p>
    </div>
    <div class="id">
        <p>ID:</p>
        <p>
         <?php
             echo $matr ;
            ?>
            </p>
    </div>
    <div class="univ">
        <p>University:</p>
        <p>
        <?php
             echo $univ;
            ?>
        </p>
    </div>
    <div class="spe">
        <p>Speciality:</p>
        <p>
        <?php
             echo $speciality ;
            ?>
        </p>
    </div>
    <div class="cyc">
        <p>Cycle:</p>
        <p>
        <?php
             echo $cycle ;
            ?>
        </p>
    </div>
    <div class="level">
        <p>Level:</p>
        <p>
        <?php
             echo $lev ;
            ?>
        </p>
    </div>
   </div> 
</body>
</html>