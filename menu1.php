<?php
	require_once "database.php";
	include "./managers/snackManager.php";

	$snacks = snackmanager::select();
?>
<html>
	<body>
		<div class="Snacks">
			<h1>SNACK</h1>
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