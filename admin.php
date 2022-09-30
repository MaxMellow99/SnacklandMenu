<?php
    require_once "database.php";
	include "./managers/snackManager.php";


?>
<html>
<head>
</head>
<body>
    <select>    
        <!-- dropdown menu voor welke tabel je een insert wil doen -->
        <option></option>
        <option></option>
        <option></option>
        <option></option>
    </select>
    <!-- tabel uitlezen waar je een update wil doen -->
    <table>
        <thead></thead>
        <tbody></tbody>
    </table>
    
    <!-- product aanpassen update verwijderen -->
    <form method="post">
        <p>Product</p>
        <input type="text"><br/><br/>

        <p>Prijs</p>
        <input type="text"><br/><br/>

        <input type="submit" value="opslaan">

    </form>    

</body>
</html>