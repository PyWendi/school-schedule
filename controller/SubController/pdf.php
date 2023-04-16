<?php
    require("connect.php");

    $date = $_GET["date"];

    // create a DateTime object from the date string
    $day = DateTime::createFromFormat("Y-m-d\TH:i", $date);
    $day = $day->format("w");
    
    // format the DateTime object as a string in the desired format
    $newDate = DateTime::createFromFormat("Y-m-d\TH:i", $date);
    $newDate = $newDate->format("Y-m-d H:i:s");

    $lastDate = DateTime::createFromFormat("Y-m-d\TH:i", $date);
    $lastDate->modify("+6 days");
    $lastDate = $lastDate->format("Y-m-d H:i:s");



    // die($newDate);
    if ($day == "1") {
        
        $sql =  "SELECT *, DATE_FORMAT(e.date, '%W %d %M %Y %H:%i:%s') date,DATE_FORMAT(e.date, '%W') day 
                FROM emploi_du_temps e
                JOIN professeur p ON e.idprof = p.idprof
                JOIN classe c ON e.idclasse = c.idclasse
                JOIN salle s on e.idsalle = s.idsalle
                WHERE e.date BETWEEN '$newDate' AND '$lastDate'
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
                while ($row = $res->fetch_assoc()) {
                ?>
                    <tr>
                        <td>
                            <?php 
                            if ($row["day"] == "Friday" ) {
                                    echo "<p class=\"day-f\">".$row["date"]."</p>";
                            } elseif ($row["day"] == "Monday") {
                                echo "<p class=\"day-m\">".$row["date"]."</p>";
                            } else {
                                echo "<p>".$row["date"]."</p>";
                            }
                        ?>
                        </td>

                        <td><?= $row["niveau"]; ?></td>
                        <td><?= $row["design"]; ?></td>
                        <td><?= $row["cours"]; ?></td>
                        <td><?= $row["nom"]; ?> <?= $row["prenom"]; ?></td>
                    </tr>
                <?php                    
                }
            ?>
                </table>
                <input type="hidden" class="dateA" name="date" value="<?= $newDate; ?>" id="date-pdf">
                <input type="hidden" class="dateB" name="date" value="<?= $lastDate; ?>" id="date-pdf">

                <div class="pdf-link">
                    <button onclick="givePdf()" class="convert">Convertir <i class="bis bi-file-earmark-pdf"></i></button>
                </div>
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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

            <p class="error">Veuiller entrer une date commencant par 'Lundi'.</p>
        <?php
    }
    $con->close();
?>