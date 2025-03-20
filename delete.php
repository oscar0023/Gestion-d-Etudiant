<?php
include 'db.php';

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $sql = "DELETE FROM etudiants WHERE id=$id";
    if($conn->query(query: $sql) === TRUE){
        echo "<p style='color: white;'>Etudiant supprimer avec succès !</p>";
    }else{
        echo "<p style='color: red;'>Erreur :". $conn->error."</p>";
    }

    header(header: "refresh:2; url=read.php");
} else{
    echo "<p style='color: red;'> ID de l'étudiant non spécifié.</p>";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un étudiant</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <div class="container">
        <h1>Supprimer un étudiant</h1>
        <p>Vos allez être rediriger vers la liste des étudiants....</p>
        <a href="read.php">Retour à la liste des étudiants</a>    
    </div>
    
</body>
</html>