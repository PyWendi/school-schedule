<?php
    require("connect.php");

    $id = $_GET["id"];

    $sql = "DELETE FROM classe WHERE idclasse = '$id'";

    if($con->query($sql)) {
        header("location:../../view/classe/all.php");
    } else {
        die($con->error);
    }
    $con->close();
?>