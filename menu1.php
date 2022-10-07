<?php
	require_once "database.php";
	include "./managers/selectManager.php";

	$patat = selectManager::selectPatat();
	$sauzen = selectManager::selectSauzen();
	$snacksM = selectManager::selectSnacks1();
	$snacksR = selectManager::selectSnacks2();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Menu 1</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div class="main">
			<div class="gridContainer">
				<div class="gridColL">
					<table class="tableA">
						<thead>
							<th><p class="title">Patat</p></th>
							<th><p><!--Bedrag--></p></th>
						</thead>
						<tbody>
							<?php
								foreach($patat as $item) {
									echo "<tr>";
										echo "<td class='tableL text'>$item->name</td>";
										echo "<td class='tableR text price'>$item->price</td>";							
									echo "</tr>";
									if($item->description != null) {
										echo "<td class='tableL description'>$item->description</td>";
										echo "<td class='tableR'></td>";
									}
								}
							?>
						</tbody>
					</table>
						
					<table class="tableA">
						<thead>
							<th><p class="title">Sauzen</p></th>
							<th><p><!--Bedrag--></p></th>
						</thead>
						<tbody>
							<?php
								foreach($sauzen as $item) {
									echo "<tr>";
										echo "<td class='tableL text'>$item->name</td>";
										echo "<td class='tableR text price'>$item->price</td>";							
									echo "</tr>";
									if($item->description != null) {
										echo "<td class='tableL description'>$item->description</td>";
										echo "<td class='tableR'></td>";
									}
								}
							?>
						</tbody>
					</table>
				</div>
				<div class="gridColM">
					<table class="tableA">
						<thead>
							<th><p class="title">Snacks</p></th>
							<th><p><!--Bedrag--></p></th>
						</thead>
						<tbody>
							<?php
								foreach($snacksM as $item) {
									echo "<tr>";
										echo "<td class='tableL text'>$item->name</td>";
										echo "<td class='tableR text price'>$item->price</td>";							
									echo "</tr>";
									if($item->description != null) {
										echo "<td class='tableL description'>$item->description</td>";
										echo "<td class='tableR'></td>";
									}
								}
							?>
						</tbody>
					</table>
				</div>
				<div class="gridColR">
					<table class="tableA">
						<thead>
							<th><p class="title"><span style="visibility:hidden;">Snacks</span></p></th>
							<th><p><!--Bedrag--></p></th>
						</thead>
						<tbody>
							<?php
								foreach($snacksR as $item) {
									echo "<tr>";
										echo "<td class='tableL text'>$item->name ";
										if($item->description != null) {
											echo "<span class='description'>$item->description</span>";
										}	
										echo "</td>";
										echo "<td class='tableR text price'>$item->price</td>";
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>