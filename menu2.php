<?php
	require_once "database.php";
	include "./managers/selectManager.php";

	$broodjes = selectManager::selectBroodjes();
    $hamburgers = selectmanager::selectHamburgers();
    $kip = selectmanager::selectKip();
    $pita = selectmanager::selectPita();
?>
<html>
<body>
		<div class="twee">
			<h1>Broodjes</h1>
			<table>
				<thead>
					<!-- naam -->
					<th></th> 
					<!-- price -->
                    <th></th>
				</thead>
				<tbody>
					<?php
						foreach($broodjes as $b){
							echo "<td>$b->name</td>";
							echo "<td>$b->price</td>";
                            if($b->description != null){
                                echo "<td>$b->description</td>";
                            }
						}
					?>

				</tbody>
			</table>
			<h1>Hamburgers</h1>
			<table>
				<thead>
					<!-- naam -->
					<th></th> 
					<!-- price -->
                    <th></th>
				</thead>
				<tbody>
					<?php
						foreach($hamburgers as $hamburger){
							echo "<td>$hamburger->name</td>";
							echo "<td>$hamburger->price</td>";
                            if($hamburger->description != null){
                                echo "<td>$hamburger->description</td>";
                            }
						}
					?>
				</tbody>
			</table>
			<h1>Kip</h1>
			<table>
				<thead>
					<!-- naam -->
					<th></th> 
					<!-- price -->
                    <th></th>
				</thead>
				<tbody>
					<?php
						foreach($kip as $k){
							echo "<td>$k->name</td>";
							echo "<td>$k->price</td>";
                            if($k->description != null){
                                echo "<td>$k->description</td>";
                            }
						}
					?>
				</tbody>
			</table>
            <h1>Pita Broodjes</h1>
			<table>
				<thead>
					<!-- naam -->
					<th></th> 
					<!-- price -->
                    <th></th>
				</thead>
				<tbody>
					<?php
						foreach($pita as $pit){
							echo "<td>$pit->name</td>";
							echo "<td>$pit->price</td>";
                            if($pit->description != null){
                                echo "<td>$pit->description</td>";
                            }
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>