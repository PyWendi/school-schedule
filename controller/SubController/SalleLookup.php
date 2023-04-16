<?php
    require("connect.php");

    $date = $_GET["date"];

    // create a DateTime object from the date string
    $new = DateTime::createFromFormat("Y-m-d\TH:i", $date);

    // format the DateTime object as a string in the desired format
    $date = $new->format("Y-m-d H:i:s");

    // die($date);


    $sql = "SELECT * FROM salle s
            JOIN emploi_du_temps e 
            ON e.idsalle = s.idsalle 
            WHERE s.occupation='non' AND DATE_FORMAT(e.date,'%Y-%m-%d %H')=DATE_FORMAT('$date','%Y-%m-%d %H')";
            /* WHERE s.occupation='non' AND e.date='$date'"; */

    if ($res = $con->query($sql)) {
        if ($res->num_rows > 0) {
            ?>
            <table>
                <tr>
                    <th>Identifiant</th>
                    <th>Designation</th>
                    <th>Occupation</th>
                </tr>
            <?php
            while ($row = $res->fetch_assoc()) {
                ?>
                <tr>
                    <td><?= $row["idsalle"]; ?></td>
                    <td><?= $row["design"] ?></td>
                    <td><?= $row["occupation"] ?></td>
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
                    <th>Identifiant</th>
                    <th>Designation</th>
                    <th>Occupation</th>
                </tr>
                <tr>
                    <td>Aucun</td>
                    <td>Salle</td>
                    <td>Trouver</td>
                </tr>
            </table>
            <?php
        }
    } else {
        die($con->error);
    }
?>