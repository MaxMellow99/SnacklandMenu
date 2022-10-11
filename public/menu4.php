<?php
    require_once "../static/database.php";
    include "../private/managers/selectManager.php";

	$porties = selectmanager::selectPorties();
    $kind = selectmanager::selectKindermenu();
    $smoothie = selectmanager::selectSmoothies();
    $milkshake = selectmanager::selectMilkshakes();
    $drank1 = selectmanager::selectDranken1();
    $drank2 = selectmanager::selectDranken2();
    $ijs = selectmanager::selectIjs();
?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
        <title>Menu 4</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div class="main">
			<div class="gridContainer">
				<div class="gridColL">
					<table class="tableA">
						<thead>
							<th class="title">Porties</th>
							<th><!--Bedrag--></th>
						</thead>
						<tbody>
							<?php
								foreach($porties as $item) {
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
                            <th class="title"><span style="visibility:hidden;">Space</span></th>
                        </thead>
						<thead>
							<th class="title">Kindermenu</th>
							<th><!--Bedrag--></th>
						</thead>
						<tbody>
                            <tr>
                                <td>
                                    <p class="description heavy">In een kindermenu zit een kleine patat, klein bakje fritessaus, appelmoes, fristi of chocomel en een snack naar keuze</p>
                                </td>
                            </tr>
							<?php
								foreach($kind as $item) {
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
				<div class="gridColM">
					<table class="tableA">
						<thead>
							<th class="title">Smoothies</th>
							<th><!--Bedrag--></th>
						</thead>
						<tbody>
							<?php
								foreach($smoothie as $item) {
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
                            <th class="title"><span style="visibility:hidden;">Space</span></th>
                        </thead>
                        <thead>
                            <th class="title">Milkshakes</th>
                            <th><!--Bedrag--></th>
                        </thead>
                        <tbody>
                            <?php
                                foreach($milkshake as $item) {
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
                            <th class="title"><span style="visibility:hidden;">Space</span></th>
                        </thead>
                        <thead>
                            <th class="title">Dranken</th>
                            <th><p><!--Bedrag--></p></th>
                        </thead>
                        <tbody>
                             <?php
                                foreach($drank1 as $item) {
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
				<div class="gridColR">
                    <table class="tableA">
                        <thead>
                        <th class="title"><span style="visibility:hidden;">Space</span></th>
                            <th><p><!--Bedrag--></p></th>
                        </thead>
                        <tbody>
                            <?php
                                foreach($drank2 as $item) {
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
                            <th class="title">Dranken</th>
                            <th><p><!--Bedrag--></p></th>
                        </thead>
                        <tbody>
                            <?php
                                foreach($ijs as $item) {
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
                            <tr>
                                <td>
                                    <p class="description heavy">Keuze uit de verschillende waterijsjes in de vriezer <br/><span class="description">Vraag naar welke ijsjes wij verkopen</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
				</div>
			</div>
		</div>
	</body>
</html>