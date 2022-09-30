<?php
	require_once "database.php";
	include "./managers/snackManager.php";

	$snacks = snackmanager::select();
?>
<html>
	<body>
		<div class="Patat">
			<table>
				<thead>
                <th>name</th>
                <th>price</th>
				</thead>
				<tbody>
					<?php
						foreach($snacks as $snack){
							echo "<td></td>";
							echo "<td></td>";
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>