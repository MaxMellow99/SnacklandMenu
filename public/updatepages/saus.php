<?php
require_once "../database.php";
include "../managers/selectManager.php";
include "../managers/updateManager.php";

$hoi = selectmanager::selectSauzen();

if (isset($_GET["id"])) {
    $hallo = selectmanager::selectidSauzen($_GET["id"]);
}

if ($_POST) {
    updateManager::updateSaus($_GET["id"], $_POST["naam"], $_POST["prijs"], $_POST["description"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <table class="table table-striped">

        <thead class="table-dark">
            <th>Sauzen</th>
            <th>prijs</th>
            <th></th>
            </head>
        <tbody>
            <?php
            foreach ($hoi as $h) {
                echo "<tr>";
                echo "<td>$h->name</td>";
                echo "<td>$h->price</td>";
                echo "<td><a class=' btn btn-primary' href='saus.php?id=$h->id'>...</a></td>";
                echo "</tr>";
            }

            ?>
        </tbody>
    </table>
    <form method="post" id="hhh">
        <input name="naam" type="text" <?php 
        if (isset($_GET["id"])) {
            $hallo = selectmanager::selectidSauzen($_GET["id"]);
            echo "value='$hallo->name'";
        }
        ?>>
        <input name="prijs" type="text" <?php 
         if (isset($_GET["id"])) {
            $hallo = selectmanager::selectidSauzen($_GET["id"]);
            echo "value='$hallo->price'"  ;
        }
        ?>>
        <input name="description" type="text" <?php
         if (isset($_GET["id"])) {
            $hallo = selectmanager::selectidSauzen($_GET["id"]);
            echo "value='$hallo->description'";
                }
       ?>>

        <input type="submit" class="btn btn-primary">
    </form>
</body>

</html>