<?php
	require_once "database.php";
	include "./managers/selectManager.php";

	$patat = selectManager::selectPatat();
	$sauzen = selectManager::selectSauzen();
	$snacks = selectManager::selectSnacks();

?>
<html>
	<body>
		<div class="Snacks">
			<h1>Patat</h1>
			<table>
				<thead>
					<!-- naam -->
					<th></th> 
					<!-- price -->
                    <th></th>
				</thead>
				<tbody>
					<?php
						foreach($patat as $p){
							echo "<td></td>";
							echo "<td>€ </td>";
						}
					?>
					<td>d</td>
					<td>d</td>

				</tbody>
			</table>
			<h1>Sauzen</h1>
			<table>
				<thead>
					<!-- naam -->
					<th></th> 
					<!-- price -->
                    <th></th>
				</thead>
				<tbody>
					<?php
						foreach($sauzen as $saus){
							echo "<td></td>";
							echo "<td>€ </td>";
						}
					?>
				</tbody>
			</table>
			<h1>Snack</h1>
			<table>
				<thead>
					<!-- naam -->
					<th></th> 
					<!-- price -->
                    <th></th>
				</thead>
				<tbody>
					<?php
						foreach($snacks as $snack){
							echo "<td></td>";
							echo "<td>€ </td>";
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>