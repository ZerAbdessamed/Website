<?php

$msg1="";

$servername = "localhost";
$dbUsername =  "root";
$dbPassword = ""; // Remplacez par votre mot de passe MySQL
$dbname = "education";
$username = $_POST['name2'];
$password = $_POST['password2'];
session_start();
$_SESSION['$mat_admin']=$username;
// // Créer une connexion
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
$req=mysqli_query($conn,"SELECT * FROM admin_inf WHERE matricule ='$username' AND pass='$password'");
$num=mysqli_num_rows($req);
echo $num;
if($num>0){
      header("Location:http://localhost/server/project/php/admin.php");
      exit();  
}else{
  $msg1="Check your name or password";
  header("Location:http://localhost/server/project/php/indexe.php");
}
$_SESSION['$erro']=$msg1;
$_SESSION['$err']="";
?>