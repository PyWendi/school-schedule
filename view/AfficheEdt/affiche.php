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
    <title>Classe EDT</title>
</head>

<body>

    <div id="header" class="animate__animated animate__fadeIn">
        <h1>Emploi du temps d'une classe</h1>
    </div>

    <div id="main">
        <div class="sidebar animate__animated animate__fadeIn">
            <a class="animate__animated animate__fadeIn button-link" href="../professeur/all.php">Gestion des professeur</a>
            <a class="animate__animated animate__fadeIn button-link" href="../salle/all.php">Gestion des salles</a>
            <a class="animate__animated animate__fadeIn button-link" href="../classe/all.php">Gestion des classes</a>
            <a class="animate__animated animate__fadeIn button-link" href="../edt/all.php">Gestion d'emploi du temps</a>
            <a class="animate__animated animate__fadeIn button-link" href="../rechercheSalle/main.php">Recherche de salle libre</a>
            <a class="animate__animated animate__fadeIn active-tab" href="">Emploi du temps d'une classe</a>
            <a class="animate__animated animate__fadeIn button-link" href="../pdf/pdf.php">Exportation PDF d'un EDT</a>
            <a class="animate__animated animate__fadeIn end" href="../../index.php">Vers l'acceuil <i class="bis bi-house-door"></i></a>
        </div>

        <div class="main-section animate__animated animate__fadeIn">
            <h2 class="title-card">Emploi du temps</h2>

            <div class="section-table animate__animated animate__fadeIn animate__delay-1s">
                <div id="fake_table">

                    <table>
                        <tr>
                            <th>Date et heure</th>
                            <th>Niveau</th>
                            <th>Salle</th>
                            <th>Scéance</th>
                            <th>Professeur</th>
                        </tr>

                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>

                    </table>

                </div>
            </div>

            <!-- Search input -->
            <div class="input-lookup  animate__animated animate__fadeIn animate__delay-1s">
                <fieldset>
                    <legend>Classe</legend>
                    <label>Selectionner le niveau</label>
                    <select class="level" name="level">
                        <option value="L1 ">L1</option>
                        <option value="L2 ">L2</option>
                        <option value="L3 ">L3</option>
                        <option value="M1 ">M1</option>
                        <option value="M2 ">M2</option>
                    </select>

                    <label>Selectionner la fillière</label>
                    <select class="filliere" name="filliere">
                        <option value="IG ">IG</option>
                        <option value="BD ">GB</option>
                        <option value="SR ">SR</option>
                    </select>

                    <label>Selectionner le groupe</label>
                    <select class="groupe" name="groupe">
                        <option value="G1">G1</option>
                        <option value="G2">G2</option>
                        <option value="G3">G3</option>
                    </select>
                    <p class="error"></p>
                </fieldset>
            </div>

            <!-- Button -->
            <div class="add-button animate__animated animate__fadeIn animate__delay-1s">
                <p>
                    <a class="add">Afficher 
                        <!-- <div class="icons"> -->
                        <i class="bis bi-filter-square"></i>
                    <!-- </div> -->
                    </a>
                </p>
            </div>
        </div>
    </div>


    <script src="../../assets/js/classEdt.js"></script>
</body>

</html>