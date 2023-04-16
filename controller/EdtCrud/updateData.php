<?php
    require("connect.php");
    $id = $_GET["id"];
    $edt = null;
    
    $sql = "SELECT * FROM emploi_du_temps e
            JOIN professeur p ON e.idprof = p.idprof
            JOIN classe c ON e.idclasse = c.idclasse
            JOIN salle s on e.idsalle = s.idsalle 
            WHERE e.id = '$id' LIMIT 1";

    //die();
    if ($res = $con->query($sql)) {
        if ($res->num_rows > 0) {
            while($row = $res->fetch_assoc()) {
                $edt = $row;
            }
        }
    } else {
        die($con->error);
    }

    $con->close();
?>