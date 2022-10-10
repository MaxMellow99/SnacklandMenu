<?php
    $con = new PDO("mysql:host=localhost;dbname=snackland;charset=utf8", 'root', '');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
