<?php
    require("../../controller/ClasseCrud/updateData.php");
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../assets/css/form-insert.css">
        <link rel="stylesheet" href="../../assets/ANIMATE.CSS/animate.css">
        <title>Mise à jour de classe</title>
    </head>

    <body>
        <div class="main radius animate__animated animate__fadeIn">
            <h1 class="header">Mise à jour de classe</h1>

            <form action="../../../controller/ClasseCrud/update.php" method="post">
                <input type="hidden" name="idclasse" value="<?=$id;?>" required>

                <p>Selectionner le niveau</p>
                <input type="text" name="level" disabled value="<?=$niveau;?>">
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

                <input type="submit" value="Soumettre" name="submit">
                <p class="cancel">
                    <a href="all.php">Annuler</a>
                </p>
            </form>

        </div>

    </body>

    </html>