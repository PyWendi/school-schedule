<?php
    require("connect.php");

    if(isset($_POST["submit"])) {
        extract($_POST);
        $niveau = $level.$filliere.$groupe;
        $idclass = null;
        $sql = "SELECT * from classe WHERE niveau='$niveau' LIMIT 1";
        
        if ($res = $con->query($sql)) {

            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    $idclass = $row["idclasse"];
                }
            } else {
                echo "<script>alert('Ce niveau n\'existe pas encore !')</script>";
                echo "<script>window.location.href='../../view/edt/all.php'</script>";
            }

            $cours = addslashes($cours);
            
            $sql = "UPDATE emploi_du_temps 
                    SET idsalle=$idsalle, idprof='$idprof', idclasse='$idclass', cours='$cours', date=DATE_FORMAT('$date','%Y-%m-%d %H:%i:%s')
                    WHERE id='$id'";
            
            if ($con->query($sql)) {
                    header("location:../../view/edt/all.php");
                } else {
                        die($con->error);
                    }
        } else {
            die($con->error);
        }
    }
    $con->close();
?>