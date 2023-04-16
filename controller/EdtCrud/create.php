<?php
    require("connect.php");
    
    if (isset($_POST["submit"])) {
        extract($_POST);
        
        $niveau = $level.$filliere.$groupe;
        $idclass;

        // Verifie si la salle inserer existe 
        $sql = "SELECT * FROM salle WHERE idsalle=$idsalle AND design='$design_salle'";
        if ($res = $con->query($sql)) {
            if ($res->num_rows > 0) {
                
                $sql = "SELECT * from classe WHERE niveau='$niveau' LIMIT 1";
                
                if ($res = $con->query($sql)) {
                    if ($res->num_rows > 0) {
                        while ($row = $res->fetch_assoc()) {
                            $idclass = $row["idclasse"];
                        }
                    } else {
                        $idclass = "N-".$niveau;
                        $sql = "INSERT INTO classe VALUES ('$idclass', '$niveau');";
        
                        if ($con->query($sql)) {
                            require("create_query.php");
                        } else {
                            die($con->error);
                        }
                    }
        
                    require("create_query.php");
                }
            
            } else {
                echo "<script>alert('Veuiller Vérifier si la salle que vous inserez existe !')</script>";
                echo "<script>window.location.href='../../view/edt/insert.php'</script>";
            }
        } else {
            die($con->error);
        }
    }
    $con->close();
?>