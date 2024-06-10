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
$img= $row['link_img'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/server/project/Style/style2.css">
    <title>Student</title>
</head>
<body>
  <div class="menu">
    <ul>
        <li class="pro">
            <div class="profile">
                <img src=
                <?php
             echo $img;
            ?>
            
                alt="this is profile">
            </div>
             <h2>
             <?php
             echo $fname." ".$lname ;
            ?>
             </h2>
        </li>
        <li class="dashboard">
            <a href="http://localhost/server/project/php/home.php">
                <i class="fas fa-home"></i>
                <p>Home</p>
            </a>
        </li>
        <li>
            <a href="http://localhost/server/project/php/group.php">
                <i class="fas fa-user-group"></i>
                <p>Groupe</p>
            </a>
        </li>
        <li>
            <a href="">
                <i id="i" class="fas fa-calendar-alt"></i>
                <p>Planing</p>
            </a>
        </li>
        <li>
            <a href="http://localhost/server/project/php/note_ex.php">
                <i class="fas fa-list-alt"></i>
                <p>Notes examens</p>
            </a>
        </li>
        <li>
            <a href="http://localhost/server/project/php/note_td.php">
                <i class="fas fa-pen"></i>
                <p>Notes C.Continu</p>
            </a>
        </li>
        <li>
            <a href="">
                <i class="fas fa-book"></i>
                <p>Course</p>
            </a>
        </li>
        <li>
            <a href="http://localhost/server/project/php/absence.php">
                <i class="fas fa-chair"></i> 
                <p>Absences</p>
            </a>
        </li>
        <li class="log">
            <a href="http://localhost/server/project/html/indexe.html" class="l" >
                <i class="fas fa-sign-out"></i>
                <p>Log out</p>
            </a>
        </li>
    </ul>
  </div>
  <div class="content">
  <div class="dash" id="dashid">
    <p id="p">Student</p>
    <i id="i" class="fas fa-chart-bar"></i>
  </div>
   <div  class="content_imp">
     <a href="#" class="content_imp-ch">
        <i id="i" class="fas fa-book"></i>
        <p id="p">Course</p>
     </a>
     <a href="http://localhost/server/project/php/note_td.php" class="content_imp-ch">
        <i id="i" class="fas fa-pen"></i> 
        <p id="p">Notes C.Continu</p>
     </a>
   </div>
   <div class="content_imp">
    <a href="http://localhost/server/project/php/note_ex.php" class="content_imp-ch">
        <i id="i" class="fas fa-list-alt"></i>
       <p id="p">Notes examens</p>
    </a>
    <a href="http://localhost/server/project/php/absence.php" class="content_imp-ch">
        <i id="i" class="fas fa-chair"></i> 
       <p id="p">Absences</p>
    </a>
  </div>
  <div id="Planing" class="content_imp">
    <a href="" class="content_imp-ch">
        <i id="i" class="fas fa-calendar-alt"></i>
       <p id="p">Planning</p>
    </a>
</body>
<script src="http://localhost/server/project/javascript/main.js"></script>
</html>