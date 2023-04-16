<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/form-insert.css">
    <link rel="stylesheet" href="../../assets/ANIMATE.CSS/animate.css">
    <title>Insertion de Salle</title>
</head>

<body>
    <div class="main radius animate__animated animate__fadeIn">
        <h1 class="header">Insertion de Salle</h1>

        <form action="../../../controller/SalleCrud/create.php" method="post">
            <p>Désignation</p>
            <input type="text" name="design" required>

            <p>Occupation</p>
            <label for="oui">Oui</label>
            <input type="radio" name="occupation" value="oui" id="oui">
            <label for="non">Non</label>
            <input type="radio" name="occupation" checked value="non" id="non">

            <input type="submit" value="submit" name="submit">
            <p class="cancel">
                <a href="all.php">Annuler</a>
            </p>
        </form>
    </div>

</body>

</html>