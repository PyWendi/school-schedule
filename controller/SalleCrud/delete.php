<?php
    require("connect.php");

    $id = $_GET["id"];

    $sql = "DELETE FROM salle WHERE idsalle = '$id'";

    if($con->query($sql)) {
        header("location:../../view/salle/all.php");
    } else {
        die($con->error);
    }
    $con->close();
?>