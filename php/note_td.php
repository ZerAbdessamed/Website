<?php

session_start();
$mat=$_SESSION['$mat'];
// Configuration de la base de données
$servername = "localhost";
$dbUsername = "root"; // Remplacez par votre nom d'utilisateur MySQL
$dbPassword = ""; // Remplacez par votre mot de passe MySQL
$dbname = "education";
$n1=$n2=$n3=$n4=$n5=$n6=$n7=$n8="";

// // Créer une connexion
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
$req=mysqli_query($conn,"SELECT * FROM note_td WHERE matricule='$mat'");
while($row=mysqli_fetch_assoc($req)){
$n1= $row['Math_Analysis'];
$n2= $row['OOP'];
$n3= $row['Computer_Engineering'];
$n4= $row['File_Structures'];
$n5= $row['Algebra'];
$n6=$row['Probability'];
$n7=$row['Algorithms'];
$n8= $row['Entrepreneurship'];
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/server/project/Style/note_ex.css">
    <title>note_Tds</title>
</head>
<body>
    <table >
        <thead>
          <tr>
            <th>Subject</th>
        
            <th id="note">Note Td</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="mat">Math Analysis 3</td>
           
            <td class="numnot"> <?php
           
           echo $n1
         
            ?>
           </td>
          </tr>
          <tr>
            <td id="mat">Object-Oriented Programing 1</td>
          
            <td class="numnot">
            <?php
           echo $n2
         
            ?>

            </td>
          </tr>
          <tr>
            <td id="mat">Computer Engineering 2</td>
           
            <td class="numnot">
            <?php
           echo $n3
         
            ?>
            </td>
          </tr>
          <tr>
            <td id="mat">File Structures and Data Structures</td>
           
            <td class="numnot">
            <?php
           echo $n4
         
            ?>
            </td>
          </tr>
          <tr>
            <td id="mat">Algebra 3</td>
      
            <td class="numnot">
            <?php
           echo $n5
         
            ?>
            </td>
          </tr>
          <tr>
            <td id="mat">Probability and Statistics 2</td>
           
            <td class="numnot">
            <?php
           echo $n6
            ?>
            
            </td>
          </tr>
          <tr>
            <td id="mat">Algorithms and Complexity</td>
        
            <td class="numnot">  <?php
           echo $n7
            ?></td>
          
          </tr>
          <tr>
            <td id="mat">Entrepreneurship</td>
        
            <td class="numnot">
            <?php
           echo $n8
         
            ?>
            </td>
          </tr>
        </tbody>
      </table>
      
</body>
<script src="http://localhost/server/project/javascript/main.js"></script>
</html>