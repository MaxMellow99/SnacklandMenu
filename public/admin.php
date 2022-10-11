<?php
    require_once "../static/database.php";
    include "../private/managers/selectManager.php";

    $selectPatat = selectmanager::selectPatat();
?>
<html>
      <head>
            <meta charset="UTF-8">
	      <title>Admin</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      </head>
      <body>
            <table class="table table-striped">
                  <thead>
                        <th>Admin</th>
                  </thead>
                  <tbody>
                        <tr><td><a class="btn btn-primary" href="updatePages/patat.php">Patat</a></td></tr>
                        <tr><td><a class="btn btn-primary" href="updatePages/saus.php">Sauzen</a></td></tr>
                        <tr><td><a class="btn btn-primary" href="updatePages/snacks.php">Snacks</a></td></tr>
                        <tr><td><a class="btn btn-primary" href="updatePages/broodjes.php">Broodjes</a></td></tr>
                        <tr><td><a class="btn btn-primary" href="updatePages/hamburger.php">Hamburger</a></td></tr>
                        <tr><td><a class="btn btn-primary" href="updatePages/kip.php">Kip</a></td></tr>
                        <tr><td><a class="btn btn-primary" href="updatePages/pita.php">Pita</a></td></tr>
                        <tr><td><a class="btn btn-primary" href="updatePages/menu.php">Menu's</a></td></tr>
                        <tr><td><a class="btn btn-primary" href="updatePages/specialiteiten.php">Specialiteiten</a></td></tr>
                        <tr><td><a class="btn btn-primary" href="updatePages/pizza.php">Turkse Pizza</a></td></tr>
                        <tr><td><a class="btn btn-primary" href="updatePages/pasta.php">Pasta</a></td></tr>
                        <tr><td><a class="btn btn-primary" href="updatePages/porties.php">Porties</a></td></tr>
                        <tr><td><a class="btn btn-primary" href="updatePages/kindermenu.php">Kindermenu</a></td></tr>
                        <tr><td><a class="btn btn-primary" href="updatePages/smoothies.php">Smoothies</a></td></tr>
                        <tr><td><a class="btn btn-primary" href="updatePages/milkshakes.php">Milkshakes</a></td></tr>
                        <tr><td><a class="btn btn-primary" href="updatePages/dranken.php">Dranken</a></td></tr>
                        <tr><td><a class="btn btn-primary" href="updatePages/ijs.php">Ijs</a></td></tr>
                  </tbody>
            </table>
      </body>
</html>