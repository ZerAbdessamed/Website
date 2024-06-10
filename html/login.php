<?php


echo 'dfghjkl';
// Configuration de la base de données
$servername = "localhost";
$dbUsername = "root"; // Remplacez par votre nom d'utilisateur MySQL
$dbPassword = ""; // Remplacez par votre mot de passe MySQL
$dbname = "education";

// // Créer une connexion
// $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

// // Vérifier la connexion
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['name'];
    $password = $_POST['password'];

    // Préparer la requête SQL pour vérifier si l'utilisateur existe
    // $stmt = $conn->prepare("SELECT  FROM student WHERE matricule = ?");
    // $stmt->bind_param("?", $username);
    // $stmt->execute();
    // $stmt->store_result();

    if ($username=='abdou'&& $password=='zerouali') {
        // Utilisateur existe, rediriger vers page1.html
        header("Location: indexe2.html");
        exit();
    }else{
        echo 'fgfhhjk';
    }}
//     $stmt->close();
// }
// $conn->close();
?>

