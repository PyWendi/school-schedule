<?php
    $cours = addslashes($cours);

    $sql = "INSERT INTO emploi_du_temps (idsalle, design_salle, idprof, idclasse, cours, date) 
    VALUES ($idsalle, '$design_salle', '$idprof', '$idclass', '$cours', DATE_FORMAT('$date','%Y-%m-%d %H:%i:%s') );";

    if ($con->query($sql)) {
        echo "<script>alert('Emploi du temps créer avec succès.')</script>";
        echo "<script>window.location.href='../../view/edt/all.php'</script>";
        // header("location:../../view/edt/all.php");
    } else {
        die($con->error);
    }
?>