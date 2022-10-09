<?php
require_once "../../static/database.php";
include "../../private/managers/selectManager.php";
include "../../private/managers/updateManager.php";

// switch(isset($_GET["saus"])){
//     case 2:
//         echo "hoooi";
//         break;
//     case 1:
//         echo "helaaas";
//         break;
 

// }



 if (isset($_GET["id"])) {
    $hallo = selectmanager::selectidSauzen($_GET["id"]);
    echo "value='$hallo->name'";
}
if ($_POST) {
    updateManager::updateSaus($_GET["id"], $_POST["naam"], $_POST["prijs"], $_POST["description"]);
}
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    </head>
    <body>
 <form method="post" id="hhh">
        <input name="naam" type="text" <?php echo "value='$hallo->name'"  ?>>
        <input name="prijs" type="text" <?php echo "value='$hallo->price'" ?>>
        <input name="description" type="text" <?php echo "value='$hallo->description'"  ?>>
        <input type="submit" class="btn btn-primary">
    </form>
</body>

</html>