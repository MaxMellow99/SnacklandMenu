<?php
	require_once "database.php";
	include "./managers/foodManager.php";

	$foods = foodmanager::select();
?>
<html>
	<body>
		<div class="Patat">
			<table>
				<thead>
					<th>name</th>
				</thead>
				<tbody>
					<?php
						foreach($foods as $food){
							echo "<td></td>";
							echo "<td></td>";
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>