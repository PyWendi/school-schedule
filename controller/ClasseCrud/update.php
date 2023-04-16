<?php
    require("connect.php");

    if(isset($_POST["submit"])) {
        extract($_POST);

        $niveau = $level.$filliere.$groupe;

        $sql = "UPDATE classe SET niveau='$niveau' WHERE idclasse='$idclasse'";

        if ($con->query($sql)) {
            header("location:../../view/classe/all.php");
        } else {
            die($con->error);
        }
    }
    $con->close();
?>