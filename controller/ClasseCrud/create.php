<?php
    require("connect.php");

    if (isset($_POST["submit"])) {
        extract($_POST);

        $niveau = $level.$filliere.$groupe;
        $idclasse = "N-".$niveau;

        $sql = "SELECT * FROM classe WHERE idclasse='$idclasse'";
        if($res = $con->query($sql)) {
            if ($res->num_rows > 0) {
                echo "<script>alert('Ce niveau existe déjà !')</script>";
                echo "<script>window.location.href='../../view/classe/all.php'</script>";
                // header("location:../../view/classe/all.php");
            } else {
                $sql = "INSERT INTO classe VALUES ('$idclasse', '$niveau');";
        
                if ($con->query($sql)) {
                    header("location:../../view/classe/all.php");
                } else {
                    die($con->error);
                }
            }
        } else {
            die($con->error);
        }

    }
    $con->close();
?>