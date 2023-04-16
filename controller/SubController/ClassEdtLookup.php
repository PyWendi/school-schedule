<?php
    require("connect.php");

    $id = $_GET["niveau"];
    $id = "N-".$id;

    $sql =  "SELECT *, DATE_FORMAT(e.date, '%W %d %M %Y %H:%i:%s') date,DATE_FORMAT(e.date, '%W') day 
            FROM emploi_du_temps e
            JOIN classe c ON e.idclasse = c.idclasse
            JOIN professeur p ON e.idprof = p.idprof
            JOIN salle s on e.idsalle = s.idsalle
            WHERE e.idclasse = '$id'
            ORDER BY e.date ASC";

    if ($res = $con->query($sql)) {
        if ($res->num_rows > 0) {
            ?>
            <table>
                <tr>
                    <th>Date et heure</th>
                    <th>Niveau</th>
                    <th>Salle</th>
                    <th>Scéance</th>
                    <th>Professeur</th>
                </tr>
            <?php
            while($row = $res->fetch_assoc()) {
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
                    
                    <td><?= $row["niveau"] ?></td>
                    <td><?= $row["design"] ?></td>
                    <td><?= $row["cours"]; ?></td>
                    <td><?= $row["nom"] ?> <?= $row["prenom"] ?></td>
                </tr>
                <?php
            }
            ?>
            </table>
        <?php
        } else {
        ?>
            <table>
                <tr>
                    <th>Date et heure</th>
                    <th>Niveau</th>
                    <th>Salle</th>
                    <th>Scéance</th>
                    <th>Professeur</th>
                </tr>
                <tr>
                    <td>Aucun</td>
                    <td>Emploi</td>
                    <td>Du</td>
                    <td>Temps</td>
                    <td>Trouver</td>
                </tr>
            </table>
        <?php
        }
    } else {
        die($con->error);
    }
?>