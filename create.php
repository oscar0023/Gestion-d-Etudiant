<?php

include 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // les à recuperer chez les etudiants
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    // La requête pour inserrer les elements recuperer dans la BD

    $sql = "INSERT INTO etudiants (name, prenom, email) VALUES ('$nom', '$prenom', '$email')";

    // Verification de la connexion avant l'insertion
    
    if($conn->query(query: $sql) == TRUE){
        echo "<p style='color: white;'> Etudiant ajouté avec sccès !</p>";
    } 
    else{
        echo "<p style='color: red;'> Erreur: ".$conn->error."</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJOUTER UN ETUDIANT</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <h1>Ajouter un étudiant</h1>
        <form action="" method="POST">
            <input type="text" name="nom" placeholder="Nom" required>
            <input type="text" name="prenom" placeholder="Prenom" required>
            <input type="text" name="email" placeholder="Email" required>
            <button type="submit" name="ajouter">Ajouter</button>
        </form>
        <br/>
        <a href="read.php">Voir la liste des étudiants</a>
    </div>
    
</body>
</html>