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
<div class="updateList">
		<a class="text link" href='updatepages/patat.php'>Patat</a>
            <br/>
        <a class="text link" href='updatepages/saus.php'>Sauzen</a>
            <br/>
		<a class="text link" href='updatepages/snacks.php'>Snacks</a>
            <br/>
		<a class="text link" href='updatepages/broodjes.php'>Broodjes</a>
            <br/>
		<a class="text link" href='updatepages/hamburger.php'>Hamburgers</a>
            <br/>
		<a class="text link" href='updatepages/kip.php'>Kip</a>
            <br/>
		<a class="text link" href='updatepages/pita.php'>Pita</a>
            <br/>
		<a class="text link" href='updatepages/menu.php'>Menu's</a>
            <br/>
		<a class="text link" href='updatepages/specialiteiten.php'>Specialiteiten</a>
            <br/>
		<a class="text link" href='updatepages/pizza.php'>Pizza</a>
            <br/>
		<a class="text link" href='updatepages/pasta.php'>Pasta</a>
            <br/>
		<a class="text link" href='updatepages/porties.php'>Porties</a>
            <br/>
		<a class="text link" href='updatepages/kindermenu.php'>Kindermenu</a>
            <br/>
		<a class="text link" href='updatepages/smoothies.php'>Smooties</a>
            <br/>
		<a class="text link" href='updatepages/milkshakes.php'>Milkshakes</a>
            <br/>
		<a class="text link" href='updatepages/dranken.php'>Dranken</a>
            <br/>
		<a class="text link" href='updatepages/ijs.php'>Ijs</a>
</div>

</body>
</html>