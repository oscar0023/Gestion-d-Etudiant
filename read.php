<?php
include 'db.php';

if(isset($_GET['supprimer'])){
    $id = $_GET['supprimer'];
    $sql = "DELETE FROM etudiants WHERE id=$id";
    if($conn->query(query: $sql) === TRUE){
        echo "<p style='color: green;'> Etudiant supprimé avec succès !</p>";
    }else{
        echo "<p style='color: red;'> Erreur: ".$conn->error."</p>";
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTE DES ETUDIANTS</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <div class="container">
        <h1>Liste des étudiants</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
            </tr>
            <?php
            $sql = "SELECT * FROM etudiants";
            $result = $conn->query(query: $sql);
            
            if($result->num_rows > 0){

                while($row = $result->fetch_assoc()){
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['prenom']}</td>
                            <td>{$row['email']}</td>           
                        </tr>";          
                }

            } else {
                echo "<tr><td colspan='5'>Aucun étudiant trouvé.</td></tr>";
            }

            ?>
        </table>
        <br>
        <a href="create.php">Ajouter un nouvel étudiant</a>
    </div>
    
</body>
</html>