<?php
require_once "database.php";
include "./managers/selectManager.php";

$patat = selectManager::selectPatat();
$sauzen = selectManager::selectSauzen();
$snacks = selectManager::selectSnacks();

?>
<html>

<head>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<div class="een grid-container">
		<div class="grid-item">
			<h1>Patat</h1>
			<table class="table borderless ">
				<thead>
					<!-- naam -->
					<th></th>
					<!-- price -->
					<th></th>
				</thead>
				<tbody>

					<?php
					foreach ($patat as $p) {
						echo "<tr>";
						echo "<td >$p->name</td>";
						echo "<td>$p->price</td>";
						if ($p->description != null) {
							echo "<td>$p->description</td>";
						}
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
			<h1>Sauzen</h1>
			<table class="table borderless">
				<thead>
					<!-- naam -->
					<th></th>
					<!-- price -->
					<th></th>
				</thead>
				<tbody>
					<?php
					foreach ($sauzen as $saus) {
						echo "<tr>";
						echo "<td>$saus->name</td>";
						echo "<td>$saus->price</td>";
						if ($saus->description != null) {
							echo "<td>$saus->description</td>";
						}
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
		</div>
		<div class="grid-item">

			<h1>Snack</h1>
			<table class="table borderless">
				<thead>
					<!-- naam -->
					<th></th>
					<!-- price -->
					<th></th>
				</thead>
				<tbody>
					<?php
					foreach ($snacks as $snack) {
						echo "<tr>";
						echo "<td>$snack->name</td>";
						echo "<td>$snack->price</td>";
						if ($snack->description != null) {
							echo "<td>$snack->description</td>";
						}
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>

</html>