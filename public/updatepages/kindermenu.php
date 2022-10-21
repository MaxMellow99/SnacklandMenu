<?php
require_once "../../static/database.php";
include "../../private/managers/selectManager.php";
include "../../private/managers/updateManager.php";

$kindermenus = selectmanager::selectKindermenu();

if (isset($_GET["id"])) {
    $kindermenu = selectmanager::selectidKindermenu($_GET["id"]);
}
if ($_POST) {
    updateManager::updateKindermenu($_GET["id"], $_POST["naam"], $_POST["prijs"], $_POST["description"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <a href="../admin4.php" class="btn btn-primary m-3">Terug</a>
    <table class="table table-striped">
        <thead class="table-dark">
            <th>Kindermenu</th>
            <th>prijs</th>
            <th></th>
        </thead>
        <tbody>
            <?php
            foreach ($kindermenus as $k) {
                echo "<tr>";
                echo "<td>$k->name</td>";
                echo "<td>$k->price</td>";
                echo "<td><a class=' btn btn-primary' href='updateKindermenu.php?id=$k->id'>...</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>