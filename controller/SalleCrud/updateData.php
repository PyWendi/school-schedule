<?php
    require("connect.php");
    $id = $_GET["id"];
    $design = null;
    $occupation = null;
    
    $sql = "SELECT * FROM salle WHERE idsalle = '$id' LIMIT 1";
    if ($res = $con->query($sql)) {
        if ($res->num_rows > 0) {
            while($row = $res->fetch_assoc()) {
                $design = $row["design"];
                $occupation = $row["occupation"];
            }
        } else {
            $design = "null";
            $occupation = "null";
        }
    } else {
        die($con->error);
    }

    $con->close();
?>