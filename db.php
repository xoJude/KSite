<?php
// db.php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "KessentiniSite";

$conn = mysqli_connect($serveur, $utilisateur, $motdepasse, $basededonnees);

if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
?>