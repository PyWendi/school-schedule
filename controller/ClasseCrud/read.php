<?php
    require("connect.php");

    $sql = "SELECT * FROM classe ORDER BY niveau";

    if ($res = $con->query($sql)) {
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) 
            {
            ?>
                <tr>
                <td><?= $row["idclasse"]; ?></td>
                <td><?= $row["niveau"]; ?></td>
                <td>
                    <a class="delete" href="update.php?id=<?=$row['idclasse']; ?>">
                        <div class="icon">
                            <i class="bi blue-icon bi-pencil-square"></i>
                        </div>
                    </a>
                </td>
                <td>
                    <a class="update" href="../../controller/ClasseCrud/delete.php?id=<?=$row['idclasse']; ?>">
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
            </tr>
            <?php
        } 
    } else { 
        die($con->error); 
    }
    
    $con->close();
?>