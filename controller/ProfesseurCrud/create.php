<?php
    require("connect.php");

    if (isset($_POST["submit"])) {
        extract($_POST);
        $grade = addslashes($grade);
        $sql = "INSERT INTO professeur VALUES ('$idprof', '$nom', '$prenom', '$grade');";

        if ($con->query($sql)) {
            header("location:../../view/professeur/all.php");
        } else {
            die($con->error);
        }
    }
    $con->close();
?>