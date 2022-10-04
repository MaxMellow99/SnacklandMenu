<?php
	require_once "database.php";
	include "./managers/selectManager.php";

	$porties = selectManager::selectPorties();
    $kindermenu = selectmanager::selectKindermenu();
    $smoothies = selectmanager::selectSmoothies();
    $milkshakes = selectmanager::selectMilkshakes();
    $dranken = selectmanager::selectDranken();
    $ijs = selectmanager::selectIjs();
?>
<html>
<body>
		<div class="vier">
			<h1>Porties</h1>
			<table>
				<thead>
					<!-- naam -->
					<th></th> 
					<!-- price -->
                    <th></th>
				</thead>
				<tbody>
					<?php
						foreach($porties as $port){
							echo "<tr>";
							echo "<td>$port->name</td>";
							echo "<td>$port->price</td>";
                            echo "<br>";
                            if($port->description != null){
                                echo "<td>$port->description</td>";
                            }
							echo "</tr>";
						}
					?>
				
				</tbody>
			</table>
			<h1>kindermenu</h1>
			<table>
				<thead>
					<!-- naam -->
					<th></th> 
					<!-- price -->
                    <th></th>
				</thead>
				<tbody>
					<?php
						foreach($kindermenu as $kinder){
							echo "<tr>";
							echo "<td>$kinder->name</td>";
							echo "<td>$kinder->price</td>";
                            if($kinder->description != null){
                                echo "<td>$kinder->description</td>";
                            }
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			<h1>Smoothies</h1>
			<table>
				<thead>
					<!-- naam -->
					<th></th> 
					<!-- price -->
                    <th></th>
				</thead>
				<tbody>
					<?php
						foreach($smoothies as $smooth){
							echo "<tr>";
							echo "<td>$smooth->name</td>";
							echo "<td>$smooth->price</td>";
                            if($smooth->description != null){
                                echo "<td>$smooth->description</td>";
                            }
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
            <h1>Milkshakes</h1>
			<table>
				<thead>
					<!-- naam -->
					<th></th> 
					<!-- price -->
                    <th></th>
				</thead>
				<tbody>
					<?php
						foreach($milkshakes as $milk){
							echo "<tr>";
							echo "<td>$milk->name</td>";
							echo "<td>$milk->price</td>";
                            if($milk->description != null){
                                echo "<td>$milk->description</td>";
                            }
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
            <h1>Dranken</h1>
			<table>
				<thead>
					<!-- naam -->
					<th></th> 
					<!-- price -->
                    <th></th>
				</thead>
				<tbody>
					<?php
						foreach($dranken as $drank){
							echo "<tr>";
							echo "<td>$drank->name</td>";
							echo "<td>$drank->price</td>";
                            if($drank->description != null){
                                echo "<td>$drank->description</td>";
                            }
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
            <h1>Ijs</h1>
			<table>
				<thead>
					<!-- naam -->
					<th></th> 
					<!-- price -->
                    <th></th>
				</thead>
				<tbody>
					<?php
						foreach($ijs as $ij){
							echo "<tr>";
							echo "<td>$ij->name</td>";
							echo "<td>$ij->price</td>";
                            if($ij->description != null){
                                echo "<td>$ij->description</td>";
                            }
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>