<?php
    require_once "database.php";
	include "./managers/selectManager.php";

    $selectPatat = selectmanager::selectPatat();
?>
<html>
<head>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="een grid-container">
		<a href='./updatepages/patat.php'><div class="grid-item btn">Patat</div></a>
        <a href='./updatepages/saus.php'><div class="grid-item btn">Sauzen</div></a>
		<a href='./updatepages/snacks.php'><div class="grid-item btn">Snacks</div></a>
		<a href='./updatepages/broodjes.php'><div class="grid-item btn">broodjes</div></a>
		<a href='./updatepages/hamburger.php'><div class="grid-item btn">hamburgers</div></a>
		<a href='./updatepages/kip.php'><div class="grid-item btn">kip</div></a>
		<a href='./updatepages/pita.php'><div class="grid-item btn">pita</div></a>
		<a href='./updatepages/menu.php'><div class="grid-item btn">menu</div></a>
		<a href='./updatepages/specialiteiten.php'><div class="grid-item btn">specialiteiten</div></a>
		<a href='./updatepages/pizza.php'><div class="grid-item btn">pizza</div></a>
		<a href='./updatepages/pasta.php'><div class="grid-item btn">pasta</div></a>
		<a href='./updatepages/porties.php'><div class="grid-item btn">porties</div></a>
		<a href='./updatepages/kindermenu.php'><div class="grid-item btn">kindermenu</div></a>
		<a href='./updatepages/smoothies.php'><div class="grid-item btn">smooties</div></a>
		<a href='./updatepages/milkshakes.php'><div class="grid-item btn">milkshakes</div></a>
		<a href='./updatepages/dranken.php'><div class="grid-item btn">dranken</div></a>
		<a href='./updatepages/ijs.php'><div class="grid-item btn">ijs</div></a>
</div>

</body>
</html>