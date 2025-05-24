<?php

$msg="";

$servername = "localhost";
$dbUsername = "root";
$dbPassword = ""; 
$dbname = "education";
$username = $_POST['name1'];
$password = $_POST['password'];
session_start();
$_SESSION['$mat']=$username;


$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
$req=mysqli_query($conn,"SELECT * FROM student_inf WHERE matricule ='$username' AND pass='$password'");
$num=mysqli_num_rows($req);
echo $num;
if($num>0){
    header("Location:http://localhost/server/project/php/Student.php");
      exit();  
}else{
  $msg="Check your name or password";
  header("Location:http://localhost/server/project/php/indexe.php");
}
$_SESSION['$err']=$msg;
$_SESSION['$erro']="";
?>

