<?php
    require("connect.php");

    if (isset($_POST["submit"])) {
        extract($_POST);

        $sql = "INSERT INTO salle (design, occupation) VALUES ('$design', '$occupation');";

        if ($con->query($sql)) {
            header("location:../../view/salle/all.php");
        } else {
            die($con->error);
        }
    }
    $con->close();
?>