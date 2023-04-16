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
    <title>Recherche salle</title>
</head>

<body>
    <div id="header" class="animate__animated animate__fadeIn">
        <h1>Recherche de salle libre</h1>
    </div>

    <div id="main">
        <div class="sidebar animate__animated animate__fadeIn">
            <a class="animate__animated animate__fadeIn button-link" href="../professeur/all.php">Gestion des professeur</a>
            <a class="animate__animated animate__fadeIn button-link" href="../salle/all.php">Gestion des salles</a>
            <a class="animate__animated animate__fadeIn button-link" href="../classe/all.php">Gestion des classes</a>
            <a class="animate__animated animate__fadeIn button-link" href="../edt/all.php">Gestion d'emploi du temps</a>
            <a class="animate__animated animate__fadeIn active-tab" href="">Recherche de salle libre</a>
            <a class="animate__animated animate__fadeIn button-link" href="../AfficheEdt/affiche.php">Emploi du temps d'une classe</a>
            <a class="animate__animated animate__fadeIn button-link" href="../pdf/pdf.php">Exportation PDF d'un EDT</a>
            <a class="animate__animated animate__fadeIn end" href="../../index.php">Vers l'acceuil <i class="bis bi-house-door"></i></a>
        </div>

        <div class="main-section animate__animated animate__fadeIn">
            <h2 class="title-card">Salle disponible</h2>

            <div class="section-table animate__animated animate__fadeIn animate__delay-1s">
                <div id="fake_table">

                    <table>
                        <tr>
                            <th>Identifiant</th>
                            <th>Designation</th>
                            <th>Occupation</th>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>

                </div>
            </div>

            <!-- Search input -->
            <div class="input-lookup  animate__animated animate__fadeIn animate__delay-1s">
                <fieldset>
                    <legend>Date à chercher</legend>
                    <input id="date" type="datetime-local" name="date" required>
                    <p class="error"></p>
                </fieldset>
            </div>

            <!-- Button -->
            <div class="add-button animate__animated animate__fadeIn animate__delay-1s">
                <p>
                    <a class="add" href="#">Chercher 
                        <!-- <div class="icons"> -->
                        <i class="bis bi-search"></i>
                    <!-- </div> -->
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script src="../../assets/js/RoomLookup.js"></script>
</body>

</html>