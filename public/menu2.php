<?php
    require_once "../static/database.php";
    include "../private/managers/selectManager.php";

	$broodjes = selectManager::selectBroodjes();
	$burgers = selectManager::selectHamburgers();
	$kip = selectManager::selectKip();
	$pita = selectManager::selectPita();

?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
        <title>Menu 2</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div class="main">
			<div class="gridContainer">
				<div class="gridColL">
					<table class="tableA">
						<thead>
							<th class="title">Broodjes</th>
							<th><!--Bedrag--></th>
						</thead>
						<tbody>
							<?php
								foreach($broodjes as $item) {
									echo "<tr>";
										echo "<td class='tableL text'>$item->name</td>";
										echo "<td class='tableR text price'>$item->price</td>";							
									echo "</tr>";
									if($item->description != null) {
										echo "<td class='tableL description'>&emsp;$item->description</td>";
										echo "<td class='tableR'></td>";
									}
								}
							?>
						</tbody>
					</table>
				</div>

				<div class="gridColM">
					<table class="tableA tableS">
						<thead>
							<th class="title">Hamburgers</th>
							<th><!--Bedrag--></th>
						</thead>
						<tbody>
							<?php
								foreach($burgers as $item) {
									echo "<tr>";
										echo "<td class='tableL text'>$item->name</td>";
										echo "<td class='tableR text price'>$item->price</td>";							
									echo "</tr>";
									if($item->description != null) {
										echo "<td class='tableL description'>&emsp;$item->description</td>";
										echo "<td class='tableR'></td>";
									}
								}
							?>
                            <tr>
                                <td>
                                    <p class="description heavy">Op alle hamburgers zit sla en saus naar keuze</p>
                                </td>
                                <td>

                                </td>
                            </tr>
						</tbody>
					</table>
				</div>
				<div class="gridColR">
					<table class="tableA">
						<thead>
							<th class="title">Kip</th>
							<th><!--Bedrag--></th>
						</thead>
						<tbody>
							<?php
								foreach($kip as $item) {
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

                    <table class="tableA">
                        <thead>
                            <th class="title"><span style="visibility:hidden;">Space</span></th>
                        </thead>
                        <thead>
                            <th class="title">Pita</th>
                            <th><!--Bedrag--></th>
                        </thead>
                        <tbody>
                        <?php
                        foreach($pita as $item) {
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