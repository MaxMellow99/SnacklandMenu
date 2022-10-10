<?php
    require_once "../static/database.php";
    include "../private/managers/selectManager.php";

    $selectPatat = selectmanager::selectPatat();
?>
<html>
<head>
	<!-- CSS only -->
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="updateList">
		<a class="text link" href='updatepages/patat.php'>Patat</a>
            <br/>
        <a class="text link" href='updatepages/saus.php'>Sauzen</a>
            <br/>
		<a class="text link" href='updatepages/snacks.php'>Snacks</a>
            <br/>
		<a class="text link" href='updatepages/broodjes.php'>broodjes</a>
            <br/>
		<a class="text link" href='updatepages/hamburger.php'>hamburgers</a>
            <br/>
		<a class="text link" href='updatepages/kip.php'>kip</a>
            <br/>
		<a class="text link" href='updatepages/pita.php'>pita</a>
            <br/>
		<a class="text link" href='updatepages/menu.php'>menu</a>
            <br/>
		<a class="text link" href='updatepages/specialiteiten.php'>specialiteiten</a>
            <br/>
		<a class="text link" href='updatepages/pizza.php'>pizza</a>
            <br/>
		<a class="text link" href='updatepages/pasta.php'>pasta</a>
            <br/>
		<a class="text link" href='updatepages/porties.php'>porties</a>
            <br/>
		<a class="text link" href='updatepages/kindermenu.php'>kindermenu</a>
            <br/>
		<a class="text link" href='updatepages/smoothies.php'>smooties</a>
            <br/>
		<a class="text link" href='updatepages/milkshakes.php'm>ilkshakes</a>
            <br/>
		<a class="text link" href='updatepages/dranken.php'>dranken</a>
            <br/>
		<a class="text link" href='updatepages/ijs.php'>ijs</a>
</div>

</body>
</html>