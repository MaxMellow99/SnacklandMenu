<?php
	require_once "../static/database.php";
	include "../private/managers/selectManager.php";

	$patat = selectManager::selectPatat();
	$sauzen = selectManager::selectSauzen();
	$snacksM = selectManager::selectSnacks1();
	$snacksR = selectManager::selectSnacks2();
?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
		<title>Menu 1</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div class="main">
			<div class="gridContainer">
				<div class="gridColL">
					<table class="tableA">
						<thead>
							<th class="title">Patat</th>
							<th><!--Bedrag--></th>
						</thead>
						<tbody>
							<?php
								foreach($patat as $item) {
									echo "<tr>";
										echo "<td class='tableL text'>$item->name</td>";
										echo "<td class='tableR text price'>€$item->price</td>";							
									echo "</tr>";
									if($item->description != null) {
										echo "<td class='tableL description'>&emsp;$item->description</td>";
										echo "<td class='tableR'></td>";
									}
								}
							?>
						</tbody>
					</table>
						
					<table class="tableA">
                        <thead>
                            <th class="title"><span style="visibility:hidden;">Space</span></th>
                        </thead>
						<thead>
							<th class="title">Sauzen</th>
							<th><!--Bedrag--></th>
						</thead>
						<tbody>
							<?php
								foreach($sauzen as $item) {
									echo "<tr>";
										echo "<td class='tableL text'>$item->name</td>";
										echo "<td class='tableR text price'>€$item->price</td>";							
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
							<th class="title">Snacks</th>
							<th><!--Bedrag--></th>
						</thead>
						<tbody>
							<?php
								foreach($snacksM as $item) {
									echo "<tr>";
										echo "<td class='tableL text'>$item->name</td>";
										echo "<td class='tableR text price'>€$item->price</td>";							
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
							<th class="title"><span style="visibility:hidden;">Space</span></th>
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
										echo "<td class='tableR text price'>€$item->price</td>";
									echo "</tr>";
								}
							?>
                            <tr>
                                <td>
                                    <p class="description heavy">Snacks zijn ook verkrijgbaar op een bolletje of pistoletje</p>
                                </td>
                                <td>

                                </td>
                            </tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>