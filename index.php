<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/ANIMATE.CSS/animate.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/bootstrap-icons/bootstrap-icons.css">
    <title>Acceuil</title>
</head>

<body>
    <div id="header" class="animate__animated animate__fadeIn">
        <h1>Bienvenue</h1>
        <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span> -->
    </div>

    <div id="mySidenav" class="sidenav ">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a class="button-link" href="">Gestion des professeur</a>
        <a class="button-link" href="view/salle/all.php">Gestion des salles</a>
        <a class="button-link" href="view/classe/all.php">Gestion des classes</a>
        <a class="button-link" href="view/edt/all.php">Gestion d'emploi du temps</a>
        <a class="button-link" href="view/rechercheSalle/main.php">Recherche de salle libre</a>
        <a class="button-link" href="view/AfficheEdt/affiche.php">Emploi du temps d'une classe</a>
        <a class="button-link" href="view/pdf/pdf.php">Exportation PDF d'un EDT</a>
    </div>

    <div id="main" class="animate__animated animate__fadeIn animate__delay-1s">

        <div class="text-header">
            <h2>Quels section voulez-vous gerer en premier lieu ?</h2>
        </div>

        <div class="links ">
            <div class="sub-links">
                <div class="section-link animate__animated animate__delay-1s animate__fadeInLeft">
                    <div class="icon">
                        <i class="bi bi-people-fill green-icon"></i>
                    </div>
                    <p>
                        <a href="view/professeur/all.php">Gestion des Professeurs</a>
                    </p>
                </div>
                <div class="section-link animate__animated animate__delay-1s animate__fadeIn">
                    <div class="icon">
                        <i class="bi bi-file-spreadsheet green-icon"></i>
                    </div>
                    <p>
                        <a href="view/salle/all.php">Gestion des salles</a>
                    </p>
                </div>
                <div class="section-link animate__animated animate__delay-1s animate__fadeInRight">
                    <div class="icon">
                        <i class="bi bi-mortarboard-fill green-icon"></i>
                    </div>
                    <p>
                        <a href="view/classe/all.php">Gestion des classes</a>
                    </p>
                </div>
            </div>


            <div class="sub-links">
                <div class="section-link animate__animated animate__delay-1s animate__fadeInLeft">
                    <div class="icon">
                        <i class="bi blue-icon bi-table"></i>
                    </div>
                    <p>
                        <a href="view/edt/all.php">Gestion de l'emploi du temps</a>
                    </p>
                </div>
                <div class="section-link animate__animated animate__delay-1s animate__fadeIn">
                    <div class="icon">
                        <i class="bi blue-icon bi-bounding-box"></i>
                    </div>
                    <p>
                        <a href="view/rechercheSalle/main.php">Recherche de salle libre</a>
                    </p>
                </div>
                <div class="section-link animate__animated animate__delay-1s animate__fadeInRight">
                    <div class="icon">
                        <i class="bi blue-icon bi-calendar2-week"></i>
                    </div>
                    <p>
                        <a href="view/AfficheEdt/affiche.php">Emploi du temps d'une classe</a>
                    </p>
                </div>
            </div>
        </div>


        <div class="sub-links-last">
            <div class="section-link-last animate__animated animate__delay-1s animate__fadeIn">
                <div class="icon">
                    <i class="bi bi-file-earmark-pdf-fill red-icon"></i>
                </div>
                <p>
                    <a href="view/pdf/pdf.php">Exportation PDF d'un EDT</a>
                </p>
            </div>
        </div>

    </div>

    <script src="assets/js/index.js"></script>

</body>

</html>