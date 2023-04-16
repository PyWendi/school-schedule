<?php
    $con = new mysqli("localhost","root","","schedule");

    if (!$con) {
        die($con->error);
    }

?>