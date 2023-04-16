<?php
    require("connect.php");

    if(isset($_POST["submit"])) {
        extract($_POST);
        $grade = addslashes($grade);
        $sql = "UPDATE professeur SET nom='$nom', prenom='$prenom', grade='$grade' WHERE idprof = '$idprof'";

        if ($con->query($sql)) {
            header("location:../../view/professeur/all.php");
        } else {
            die($con->error);
        }
    }
    $con->close();
?>