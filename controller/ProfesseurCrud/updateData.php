<?php
    require("connect.php");
    $id = $_GET["id"];
    $nom = null;
    $prenom = null;
    $grade = null;
    
    $sql = "SELECT * FROM professeur WHERE idprof = '$id' LIMIT 1";
    if ($res = $con->query($sql)) {
        if ($res->num_rows > 0) {
            while($row = $res->fetch_assoc()) {
                $nom = $row["nom"];
                $prenom = $row["prenom"];
                $grade = $row["grade"];
            }
        } else {
            $nom = "null";
            $prenom = "null";
            $grade = "null";
        }
    } else {
        die($con->error);
    }

    $con->close();
?>