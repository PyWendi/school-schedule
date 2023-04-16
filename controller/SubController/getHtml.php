<?php
    require("connect.php");

    extract($_GET);

    $table = "";
    $i = 0;
    $dateNorm = null;

    $mon = "<table>
        <tr>
            <th>Date et heure</th>
            <th>Niveau</th>
            <th>Salle</th>
            <th>Scéance</th>
            <th>Professeur</th>
        </tr>";
    $tue = "<table>
    <tr>
        <th>Date et heure</th>
        <th>Niveau</th>
        <th>Salle</th>
        <th>Scéance</th>
        <th>Professeur</th>
    </tr>";
    $wen = "<table>
    <tr>
        <th>Date et heure</th>
        <th>Niveau</th>
        <th>Salle</th>
        <th>Scéance</th>
        <th>Professeur</th>
    </tr>";
    $thu = "<table>
    <tr>
        <th>Date et heure</th>
        <th>Niveau</th>
        <th>Salle</th>
        <th>Scéance</th>
        <th>Professeur</th>
    </tr>";
    $fri = "<table>
    <tr>
        <th>Date et heure</th>
        <th>Niveau</th>
        <th>Salle</th>
        <th>Scéance</th>
        <th>Professeur</th>
    </tr>";
    $sat = "<table>
    <tr>
        <th>Date et heure</th>
        <th>Niveau</th>
        <th>Salle</th>
        <th>Scéance</th>
        <th>Professeur</th>
    </tr>";

    $sql =  "SELECT *, DATE_FORMAT(e.date, '%W %d %M %Y %H:%i:%s') date,DATE_FORMAT(e.date, '%W') day, DATE_FORMAT(e.date, '%W %d %M %Y') jour,DATE_FORMAT(e.date, '%w') njour
            FROM emploi_du_temps e
            JOIN classe c ON e.idclasse = c.idclasse
            JOIN professeur p ON e.idprof = p.idprof
            JOIN salle s on e.idsalle = s.idsalle
            WHERE e.date BETWEEN '$dateA' AND '$dateB'
            ORDER BY e.date ASC";

    if ($res = $con->query($sql)) {
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                switch ($row["njour"]) {
                    case '1':
                        $mon = $mon."
                        <tr>
                            <td>".$row['date']."</td>
                            <td>".$row['niveau']."</td>
                            <td>".$row['design']."</td>
                            <td>".$row['cours']."</td>
                            <td>".$row['nom']." ".$row['prenom']."</td>
                        </tr>";
                        
                        break;

                    case '2':
                        $tue = $tue."
                        <tr>
                            <td>".$row['date']."</td>
                            <td>".$row['niveau']."</td>
                            <td>".$row['design']."</td>
                            <td>".$row['cours']."</td>
                            <td>".$row['nom']." ".$row['prenom']."</td>
                        </tr>";
                        break;

                    case '3':
                        $wen = $wen."
                        <tr>
                            <td>".$row['date']."</td>
                            <td>".$row['niveau']."</td>
                            <td>".$row['design']."</td>
                            <td>".$row['cours']."</td>
                            <td>".$row['nom']." ".$row['prenom']."</td>
                        </tr>";
                        break;

                    case '4':
                        $thu = $thu."
                        <tr>
                            <td>".$row['date']."</td>
                            <td>".$row['niveau']."</td>
                            <td>".$row['design']."</td>
                            <td>".$row['cours']."</td>
                            <td>".$row['nom']." ".$row['prenom']."</td>
                        </tr>";
                        break;
                        
                    case '5':
                        $fri = $fri."
                        <tr>
                            <td>".$row['date']."</td>
                            <td>".$row['niveau']."</td>
                            <td>".$row['design']."</td>
                            <td>".$row['cours']."</td>
                            <td>".$row['nom']." ".$row['prenom']."</td>
                        </tr>";
                        break;

                    case '6':
                        $sat = $sat."
                        <tr>
                            <td>".$row['date']."</td>
                            <td>".$row['niveau']."</td>
                            <td>".$row['design']."</td>
                            <td>".$row['cours']."</td>
                            <td>".$row['nom']." ".$row['prenom']."</td>
                        </tr>";
                        break;
                }
                // $table = $table . "
                // <tr>
                //     <td>".$row['date']."</td>
                //     <td>".$row['niveau']."</td>
                //     <td>".$row['design']."</td>
                //     <td>".$row['cours']."</td>
                //     <td>".$row['nom']." ".$row['prenom']."</td>
                // </tr>";
                
                if ($i ===0 ) {
                    $dateNorm = $row["jour"];
                }
                $i++;
            }
        }
    } else {
        die($con->error);
    }


    $mon = $mon."</table><br><br>";
    $tue = $tue."</table><br><br>";
    $wen = $wen."</table><br><br>";
    $thu = $thu."</table><br><br>";
    $fri = $fri."</table><br><br>";
    $sat = $sat."</table><br><br>";


    $headerHtml = "
    <!DOCTYPE html>
    <html>
    
    <head>
        <title>Emploi du temps</title>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            
            td,
            th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            
            body {
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            
            h1 {
                text-align: center;
            }
        </style>
    </head>
    
    <body>
        <h1>Emploi du temps de la semaine du $dateNorm</h1>
    ";

    $endHtml = "
        </body>
        
        </html>
    ";

    // $html = $headerHtml.$table.$endHtml;
    $html = $headerHtml.$mon.$tue.$wen.$thu.$fri.$sat.$endHtml;
?>