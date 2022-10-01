<?php
	require_once "database.php";
	include "./managers/selectManager.php";

	$menu = selectManager::selectMenu();
    $specialiteiten = selectmanager::selectSpecialiteiten();
    $pizza = selectmanager::selectPizza();
    $pasta = selectmanager::selectPasta();
?>
<html>
<body>
		<div class="drie">
			<h1>Menu</h1>
			<table>
				<thead>
					<!-- naam -->
					<th></th> 
					<!-- price -->
                    <th></th>
				</thead>
				<tbody>
					<?php
						foreach($menu as $men){
							echo "<td>$men->name</td>";
							echo "<td>$men->price</td>";
                            if($men->description != null){
                                echo "<td>$men->description</td>";
                            }
						}
					?>
				
				</tbody>
			</table>
			<h1>Specialiteiten</h1>
			<table>
				<thead>
					<!-- naam -->
					<th></th> 
					<!-- price -->
                    <th></th>
				</thead>
				<tbody>
					<?php
						foreach($specialiteiten as $special){
							echo "<td>$special->name</td>";
							echo "<td>$special->price</td>";
                            if($special->description != null){
                                echo "<td>$special->description</td>";
                            }
						}
					?>
				</tbody>
			</table>
			<h1>Pizza</h1>
			<table>
				<thead>
					<!-- naam -->
					<th></th> 
					<!-- price -->
                    <th></th>
				</thead>
				<tbody>
					<?php
						foreach($pizza as $piz){
							echo "<td>$piz->name</td>";
							echo "<td>$piz->price</td>";
                            if($piz->description != null){
                                echo "<td>$piz->description</td>";
                            }
						}
					?>
				</tbody>
			</table>
            <h1>Pasta</h1>
			<table>
				<thead>
					<!-- naam -->
					<th></th> 
					<!-- price -->
                    <th></th>
				</thead>
				<tbody>
					<?php
						foreach($pasta as $past){
							echo "<td>$past->name</td>";
							echo "<td>$past->price</td>";
                            if($past->description != null){
                                echo "<td>$past->description</td>";
                            }
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>