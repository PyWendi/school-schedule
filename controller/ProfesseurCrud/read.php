<?php
    require("connect.php");

    $sql = "SELECT * FROM professeur ORDER BY idprof ASC";

    if ($res = $con->query($sql)) {
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
            ?>

            <tr>
                <td><?= $row["idprof"]; ?></td>
                <td><?= $row["nom"]; ?> <?= $row["prenom"]; ?></td>
                <td><?= $row["grade"]; ?></td>
                <td>
                    <a class="delete" href="update.php?id=<?=$row['idprof']; ?>">
                        <div class="icon">
                            <i class="bi blue-icon bi-pencil-square"></i>
                        </div>
                    </a>
                </td>
                <td>
                    <a class="update" href="../../controller/ProfesseurCrud/delete.php?id=<?=$row['idprof']; ?>">
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
            </tr>
            <?php
        } 
    } else { 
        die($con->error); 
    }
    
    $con->close();
?>