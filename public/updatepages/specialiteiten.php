<?php
require_once "../../static/database.php";
include "../../private/managers/selectManager.php";
include "../../private/managers/updateManager.php";

$specialiteiten = selectmanager::selectSpecialiteiten();

if (isset($_GET["id"])) {
    $specialiteit = selectmanager::selectidSpecialiteiten($_GET["id"]);
}
if ($_POST) {
    updateManager::updateSpecialiteiten($_GET["id"], $_POST["naam"], $_POST["prijs"], $_POST["description"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<a href="../admin3.php" class="btn btn-primary m-3">Terug</a>
    <table class="table table-striped">
        <thead class="table-dark">
            <th>Specialiteiten</th>
            <th>prijs</th>
            <th></th>
        </thead>
        <tbody>
            <?php
            foreach ($specialiteiten as $s) {
                echo "<tr>";
                echo "<td>$s->name</td>";
                echo "<td>$s->price</td>";
                echo "<td><a class=' btn btn-primary' href='updateSpecialiteiten.php?id=$s->id'>...</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>