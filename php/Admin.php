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
$img= $row['image'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/server/project/Style/admin.css">
    <title>Admin</title>
</head>
<body>
  <div class="menu">
    <ul>
        <li class="pro">
            <div class="profile">
                <img src=
                <?php
             echo $img;
            ?> alt="this is profile">
            </div>
             <h2>
             <?php
             echo $fname." ".$lname ;
            ?>
             </h2>
        </li>
        <li class="dashboard">
            <a href="http://localhost/server/project/php/home_admin.php">
                <i class="fas fa-home"></i>
                <p>Home</p>
            </a>
        </li>
        <li>
            <a href="">
                <i id="i" class="fas fa-calendar-alt"></i>
                <p> Add Planing</p>
            </a>
        </li>
        <li>
            <a href="http://localhost/server/project/html/add_ex.html">
                <i class="fas fa-list-alt"></i>
                <p> Add Notes examens</p>
            </a>
        </li>
        <li>
            <a href="http://localhost/server/project/html/add_td.html">
                <i class="fas fa-pen"></i>
                <p> Add Notes C.Continu</p>
            </a>
        </li>
        <li>
            <a href="">
                <i class="fas fa-book"></i>
                <p> Add Course</p>
            </a>
        </li>
        <li>
            <a href="http://localhost/server/project/html/add_absence.html">
                <i class="fas fa-chair"></i> 
                <p> Add Absences</p>
            </a>
        </li>
        <li   class="log">
            <a href="http://localhost/server/project/html/indexe.html" class="l">
                <i class="fas fa-sign-out"></i>
                <p>Log out</p>
            </a>

        </li>
    </ul>
  </div>
  <div class="content">
  <div class="dash" id="dashid">
    <p id="p">Administrator</p>
    <i id="i" class="fas fa-chart-bar"></i>
  </div>
   <div class="content_imp">
     <a href="#" class="content_imp-ch">
        <i id="i" class="fas fa-book"></i>
        <p id="p"> Add Course</p>
     </a>
     <a href="http://localhost/server/project/html/add_td.html" class="content_imp-ch">
        <i id="i" class="fas fa-pen"></i> 
        <p id="p"> Add Notes C.C</p>
     </a>
   </div>
   <div class="content_imp">
    <a href="http://localhost/server/project/html/add_ex.html" class="content_imp-ch">
        <i id="i" class="fas fa-list-alt"></i>
       <p id="p"> Add Notes examens</p>
    </a>
    <a href="http://localhost/server/project/html/add_absence.html" class="content_imp-ch">
        <i id="i" class="fas fa-chair"></i> 
       <p id="p"> Add Absences</p>
    </a>
  </div>
  <div id="Planing" class="content_imp">
    <a href="" class="content_imp-ch">
        <i id="i" class="fas fa-calendar-alt"></i>
       <p id="p"> Add Planning</p>
    </a>
  </div>
  </div>
</body>
<script src="/javascript/main.js"></script>
</html>