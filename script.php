<?php
    $connection = new mysqli("localhost", "root", "", "silin_db");
    $query = "select * from offical_list;";

    $result = $connection->query($query);

    $connection->close();
?>