<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/side.css">
    <link rel="stylesheet" href="../../assets/ANIMATE.CSS/animate.css">
    <link rel="stylesheet" href="../../assets/css/professeur.css">
    <link rel="stylesheet" href="../../assets/bootstrap-icons/bootstrap-icons.css">
    <title>Classe</title>
</head>

<body>
    <div id="header" class="animate__animated animate__fadeIn">
        <h1>Gestion des classes</h1>
    </div>

    <div id="main">
        <div class="sidebar animate__animated animate__fadeIn">
            <a class="animate__animated animate__fadeIn button-link" href="../professeur/all.php">Gestion des professeur</a>
            <a class="animate__animated animate__fadeIn button-link" href="../salle/all.php">Gestion des salles</a>
            <a class="animate__animated animate__fadeIn active-tab" href="">Gestion des classes</a>
            <a class="animate__animated animate__fadeIn button-link" href="../edt/all.php">Gestion d'emploi du temps</a>
            <a class="animate__animated animate__fadeIn button-link" href="../rechercheSalle/main.php">Recherche de salle libre</a>
            <a class="animate__animated animate__fadeIn button-link" href="../AfficheEdt/affiche.php">Emploi du temps d'une classe</a>
            <a class="animate__animated animate__fadeIn button-link" href="../pdf/pdf.php">Exportation PDF d'un EDT</a>
            <a class="animate__animated animate__fadeIn end" href="../../index.php">Vers l'acceuil <i class="bis bi-house-door"></i></a>
        </div>

        <div class="main-section animate__animated animate__fadeIn">
            <h2 class="title-card">Tous les classes</h2>

            <div class="section-table animate__animated animate__fadeIn animate__delay-1s">
                <table>
                    <tr>
                        <th>Identifiant</th>
                        <th>Niveau</th>
                        <th>Mise à jour</th>
                        <th>Suppression</th>
                    </tr>

                    <?php
                        require("../../controller/ClasseCrud/read.php");
                    ?>

                </table>
            </div>

            <div class="add-button animate__animated animate__fadeIn animate__delay-1s">
                <p>
                    <a class="add" href="insert.php">Ajouter 
                        <!-- <div class="icons"> -->
                        <i class="bis bi-person-check"></i>
                    <!-- </div> -->
                    </a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>