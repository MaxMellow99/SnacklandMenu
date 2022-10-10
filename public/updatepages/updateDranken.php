<?php
require_once "../../static/database.php";
include "../../private/managers/selectManager.php";
include "../../private/managers/updateManager.php";

 if (isset($_GET["id"])) {
    $drank = selectmanager::selectidDranken($_GET["id"]);
}
if ($_POST) {
    updateManager::updateDranken($_GET["id"], $_POST["naam"], $_POST["prijs"], $_POST["description"]);
}
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <a href="dranken.php" class="btn btn-primary m-3">Terug</a>
    <div class="hhh">
        <form method="post">
            <input class="form-control" name="naam" type="text" <?php echo "value='$drank->name'"  ?>><br />
            <input class="form-control" name="prijs" type="text" <?php echo "value='$drank->price'" ?>><br />
            <input class="form-control" name="description" type="text" <?php echo "value='$drank->description'"  ?>><br />
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</body>

</html>