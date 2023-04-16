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
    <title>Generation de PDF</title>
</head>

<body>

    <div id="header" class="animate__animated animate__fadeIn">
        <h1>Generation de PDF</h1>
    </div>

    <div id="main">
        <div class="sidebar animate__animated animate__fadeIn">
            <a class="animate__animated animate__fadeIn button-link" href="../professeur/all.php">Gestion des professeur</a>
            <a class="animate__animated animate__fadeIn button-link" href="../salle/all.php">Gestion des salles</a>
            <a class="animate__animated animate__fadeIn button-link" href="../classe/all.php">Gestion des classes</a>
            <a class="animate__animated animate__fadeIn button-link" href="../edt/all.php">Gestion d'emploi du temps</a>
            <a class="animate__animated animate__fadeIn button-link" href="../rechercheSalle/main.php">Recherche de salle libre</a>
            <a class="animate__animated animate__fadeIn button-link" href="../AfficheEdt/affiche.php">Emploi du temps d'une classe</a>
            <a class="animate__animated animate__fadeIn active-tab" href="">Exportation PDF d'un EDT</a>
            <a class="animate__animated animate__fadeIn end" href="../../index.php">Vers l'acceuil <i class="bis bi-house-door"></i></a>
        </div>

        <div class="main-section animate__animated animate__fadeIn">
            <h2 class="title-card">Exportation PDF d'un emploi du temps</h2>

            <div class="section-table animate__animated animate__fadeIn animate__delay-1s">
                <div id="fake_table">
                    <table>
                        <tr>
                            <th>Identifiant</th>
                            <th>Nom et prénom</th>
                            <th>Grade</th>
                            <th>Mise à jour</th>
                            <th>Suppression</th>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>

                </div>

            </div>
            <div class="form-input">
                <div class="date-input">
                    <p>Saisir une date commencant par un "Lundi" pour en extraire l'emploi du temps de la semaine correspondant.</p>
                    <input type="datetime-local" name="date" id="date-pdf">
                </div>

                <!-- <button disabled><a href="test.pdf">Votre lien Apparaitra ici</a></button> -->
                <!-- <div class="pdf-link">
                    <a class="convert" href="">Convertir <i class="bis bi-file-earmark-pdf"></i></a>
                </div> -->
            </div>

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

    <script src="../../assets/js/pdf.js"></script>
</body>

</html>

<!DOCTYPE html>
<html>