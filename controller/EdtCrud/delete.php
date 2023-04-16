<?php
    require("connect.php");

    $id = $_GET["id"];

    $sql = "DELETE FROM emploi_du_temps WHERE id = '$id'";

    if($con->query($sql)) {
        header("location:../../view/edt/all.php");
    } else {
        die($con->error);
    }
    $con->close();
?>