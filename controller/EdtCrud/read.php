<?php
    require("connect.php");

    $sql =  "SELECT *, DATE_FORMAT(e.date, '%W %d %M %Y %H:%i:%s') date,DATE_FORMAT(e.date, '%W') day 
            FROM emploi_du_temps e
            JOIN professeur p ON e.idprof = p.idprof
            JOIN classe c ON e.idclasse = c.idclasse
            JOIN salle s on e.idsalle = s.idsalle
            ORDER BY e.date DESC";

    if ($res = $con->query($sql)) {
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
            ?>
    <tr>
        <td><?php 
            if ($row["day"] == "Friday" ) {
                    echo "<p class=\"day-f\">".$row["date"]."</p>";
            } elseif ($row["day"] == "Monday") {
                echo "<p class=\"day-m\">".$row["date"]."</p>";
            } else {
                echo "<p>".$row["date"]."</p>";
            }
        ?>
        </td>
        <td>
            <?= $row["niveau"]; ?>
        </td>
        <td>
            <?= $row["design"]; ?>
        </td>
        <td>
            <?= $row["cours"]; ?>
        </td>
        <td>
            <?= $row["nom"]; ?>
                <?= $row["prenom"]; ?>
        </td>
        <td>
            <a class="delete" href="update.php?id=<?=$row['id']; ?>">
                <div class="icon">
                    <i class="bi blue-icon bi-pencil-square"></i>
                </div>
            </a>
        </td>
        <td>
            <a class="update" href="../../controller/EdtCrud/delete.php?id=<?=$row['id']; ?>">
                <div class="icon">
                    <i class="bi red-icon bi-x-circle"></i>
                </div>
            </a>
        </td>
    </tr>
    <?php
            
            }
        } else { 
            ?>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <?php
        } 
    } else { 
        die($con->error); 
    }
    
    $con->close();
?>