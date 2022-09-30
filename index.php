<?php
	require_once "database.php";
	include "./managers/foodManager.php";

	$food = foodmanager::select();
?>
<html>
	<body>
		<div class="menu"></div>
	</body>
</html>