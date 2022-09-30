<?php
	require_once "database.php";
	include "./managers/selectManager.php";

	$snacks = selectManager::selectPatat();
?>
<html>

<body>
    <div class="Patat">
        <table>
            <thead>
                <!-- naam -->
                <th></th>
                <!-- price -->
                <th></th>
            </thead>
            <tbody>
                <?php
                foreach ($snacks as $snack) {
                    echo "<td></td>";
                    echo "<td>€ </td>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>