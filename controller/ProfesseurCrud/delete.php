<?php
    require("connect.php");

    $id = $_GET["id"];

    $sql = "DELETE FROM professeur WHERE idprof = '$id'";

    if($con->query($sql)) {
        header("location:../../view/professeur/all.php");
    } else {
        die($con->error);
    }
    $con->close();
?>