<?php

    $connect = new mysqli("localhost", "root", "", "inventory", 3306);

    if($connect -> connect_errno)
    {
        die('Could not connect: ' . $connect->connect_errno);
    }

?>