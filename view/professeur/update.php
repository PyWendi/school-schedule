<?php
require("../../controller/ProfesseurCrud/updateData.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/form-insert.css">
    <link rel="stylesheet" href="../../assets/ANIMATE.CSS/animate.css">
    <title>Mise à de professeur</title>
</head>

<body>
    <div class="main radius animate__animated animate__fadeIn">
        <h1 class="header">Mise à jour de professeur</h1>

        <form action="../../../controller/ProfesseurCrud/update.php" method="post">
            <input type="hidden" name="idprof" value="<?=$id;?>" required>
            <p>Entrer le nom</p>
            <input type="text" name="nom" value="<?=$nom;?>" required>
            <p>Entrer le prenom</p>
            <input type="text" name="prenom" value="<?=$prenom;?>" required>
            <p>Entrer le grade</p>
            <select name="grade">
                <option value="Professeur Titulaire">Professeur titulaire</option>
                <option value="Maitre de conférences">Maitre de Conférences</option>
                <option value="Assistant d'enseignement Supérieur et de Recherche">Assistant d'enseignement Supérieur et de Recherche</option>
                <option value="Docteur HDR">Docteur HDR</option>
                <option value="Docteur en informatique">Docteur en informatique</option>
                <option value="Doctorant en Informatique">Doctorant en Informatique</option>
                <option value="Autre">Autre</option>
            </select>
            <input type="submit" value="Soumettre" name="submit">
            
            <p class="cancel">
                <a href="all.php">Annuler</a>
            </p>         
        </form>
    </div>

</body>

</html>