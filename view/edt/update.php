<?php
    require("../../controller/EdtCrud/updateData.php");
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../assets/css/form-edt.css">
        <link rel="stylesheet" href="../../assets/ANIMATE.CSS/animate.css">
        <title>Mise à jour d'un EDT</title>
    </head>

    <body>
        <div class="main radius animate__animated animate__fadeIn">
            <h1 class="header">Mise à jour d'un EDT</h1>

            <form action="../../../controller/EdtCrud/update.php" method="post">
                <div class="diviser">
                    <div class="separation">
                        <input type="hidden" name="id" value="<?=$id;?>" required>
                        <p>Identifiant de la salle</p>
                        <input type="number" min="1" name="idsalle" value="<?=$edt['idsalle'];?>" required>

                        <p>Désignation de la salle</p>
                        <input type="text" name="design_salle" value=" <?=$edt['design_salle'];?>" required>

                        <p>Identifiant du professeur</p>
                        <input type="text" name="idprof" value="<?=$edt['idprof'];?>" required>

                        <p>Entrer le cours</p>
                        <input type="text" name="cours" value="<?=$edt['cours'];?>" required>

                    </div>


                    <div class="separation">
                        <p>Classe actuel </p>
                        <input type="text" name="idclasse" value="<?=$edt['niveau']?>" disabled>

                        <p>Selectionner le niveau</p>
                        <select name="level">
                            <option value="L1 ">L1</option>
                            <option value="L2 ">L2</option>
                            <option value="L3 ">L3</option>
                            <option value="M1 ">M1</option>
                            <option value="M2 ">M2</option>
                        </select>

                        <p>Selectionner la fillière</p>
                        <select name="filliere">
                            <option value="IG ">IG</option>
                            <option value="BD ">GB</option>
                            <option value="SR ">SR</option>
                        </select>

                        <p>Selectionner le groupe</p>
                        <select name="groupe">
                            <option value="G1">G1</option>
                            <option value="G2">G2</option>
                            <option value="G3">G3</option>
                        </select>
                    </div>


                </div>
                <p>La date et l'heure</p>
                <input type="datetime-local" value="<?=$edt['date'];?>" name="date" required>

                <input type="submit" value="submit" name="submit">
                <p class="cancel">
                    <a href="all.php">Annuler</a>
                </p>
            </form>
        </div>
    </body>

    </html>