<?php

session_start();
$matr=$_SESSION['$mat'];
$servername = "localhost";
$dbUsername = "root"; 
$dbPassword = ""; 
$dbname = "education";



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
    <link rel="stylesheet" href="http://localhost/server/project/Style/group.css">
    <title>Group</title>
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
        <div class="group">
            <p>Group:</p>
            <p>
            <?php
             echo $group;
            ?>
            </p>
        </div>
        </div>
       </div> 
</body>
</html>