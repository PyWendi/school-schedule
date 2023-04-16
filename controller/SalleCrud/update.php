<?php
    require("connect.php");

    if(isset($_POST["submit"])) {
        extract($_POST);

        $sql = "UPDATE salle SET design='$design', occupation='$occupation' WHERE idsalle = $idsalle";

        if ($con->query($sql)) {
            header("location:../../view/salle/all.php");
        } else {
            die($con->error);
        }
    }
    $con->close();
?>