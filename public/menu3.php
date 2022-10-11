<?php
    require_once "../static/database.php";
    include "../private/managers/selectManager.php";

	$menu1 = selectManager::selectMenu1();
	$menu2 = selectManager::selectMenu2();
	$specialiteiten = selectManager::selectSpecialiteiten();
	$pizza = selectManager::selectPizza();
	$pasta = selectManager::selectPasta();

?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
        <title>Menu 3</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div class="main">
			<div class="gridContainer">
				<div class="gridColL">
					<table class="tableA">
						<thead>
							<th class="title">Menu's</th>
							<th><!--Bedrag--></th>
						</thead>
						<tbody>
							<?php
								foreach($menu1 as $item) {
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
				</div>

				<div class="gridColM">
					<table class="tableA tableS">
						<thead>
							<th class="title">Snackland Specialiteiten</th>
							<th><!--Bedrag--></th>
						</thead>
						<tbody>
							<?php
								foreach($specialiteiten as $item) {
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
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                            </tr>
						</tbody>
					</table>
                    <p class="description heavy">Alle menu's worden geserveerd met patat, salade en 2 soorten saus</p>
				</div>

				<div class="gridColR">
                    <table class="tableA">
                        <thead>
                            <th class="title"><span style="visibility:hidden;">Space</span></th>
                            <th><p><!--Bedrag--></p></th>
                        </thead>
                        <tbody>
                            <?php
                                foreach($menu2 as $item) {
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

					<table class="tableA">
						<thead>
                            <th class="title"><span style="visibility:hidden;">Space</span></th>
                            <th><p><!--Bedrag--></p></th>
                        </thead>
						<thead>
							<th class="title">Turkse Pizza</th>
							<th><!--Bedrag--></th>
						</thead>
						<tbody>
							<?php
								foreach($pizza as $item) {
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
						</tbody>
					</table>

                    <table class="tableA">
                        <thead>
                            <th class="title"><span style="visibility:hidden;">Space</span></th>
                        </thead>
                        <thead>
                            <th class="title">Pasta</th>
                            <th><!--Bedrag--></th>
                        </thead>
                        <tbody>
                        <?php
                        foreach($pasta as $item) {
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
                        </tbody>
                    </table>
				</div>
			</div>
		</div>
	</body>
</html>