<?php
    require("connect.php");
    $id = $_GET["id"];
    $niveau = null;
    
    $sql = "SELECT * FROM classe WHERE idclasse = '$id' LIMIT 1";
    if ($res = $con->query($sql)) {
        if ($res->num_rows > 0) {
            while($row = $res->fetch_assoc()) {
                $niveau = $row["niveau"];
            }
        }
    } else {
        die($con->error);
    }

    $con->close();
?>