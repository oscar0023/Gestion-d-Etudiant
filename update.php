<?php
include 'db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM etudiants WHERE id=$id";
    $result = $conn->query(query: $sql);
    $row = $result->fetch_assoc();
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $POST['id'];
    $nom = $POST['name'];
    $prenom = $POST['prenom'];
    $email = $POST['email'];
    
    $sql = "UPDATE etudiants SET name='$nom', prenom='$prenom', email='$email' WHERE id=$id";
    if($conn->query(query: $sql) == TRUE){
        echo "<p style='color: green;'>Etudiant modifié avec succès !</p>";
        header(header: "Location: read.php");
    } else{
        echo "<p style='color: red;'>Erreur :". $conn->error."</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFIER UN ETUDIANT</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <h1>Modifier un étudiant</h1>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="nom" value="<?php echo $row['name']; ?>" placeholder="Nom" required>
            <input type="text" name="prenom" value="<?php echo $row['prenom'];?>" placeholder="Prenom" required>
            <input type="text"name="email" value="<?php echo $row['email'];?>" placeholder="Email" required>
            <button type="submit" name="modifier">Modifier</button>
        </form>
        <br>
        <a href="read.php">Retour à la liste des étudiants</a>
    </div>
</body>
</html>