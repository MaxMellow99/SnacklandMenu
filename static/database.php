<?php
    $con = new PDO("mysql:host=localhost;dbname=snackland;", 'root', '');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>