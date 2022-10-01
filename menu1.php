<?php
	require_once "database.php";
	include "./managers/selectManager.php";

	$patat = selectManager::selectPatat();
	$sauzen = selectManager::selectSauzen();
	$snacks = selectManager::selectSnacks();

?>
<html>
	<body>
		<div class="een">
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
							echo "<td>$p->name</td>";
							echo "<td>$p->price</td>";
							if($p->description != null){
                                echo "<td>$p->description</td>";
                            }
						}
					?>

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
							echo "<td>$saus->name</td>";
							echo "<td>$saus->price</td>";
							if($saus->description != null){
                                echo "<td>$saus->description</td>";
                            }
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
							echo "<td>$snack->name</td>";
							echo "<td>$snack->price</td>";
							if($snack->description != null){
                                echo "<td>$snack->description</td>";
                            }
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>