<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Megújulo energiaforrás</title>
</head>
<body>
    <h1>Megújuló energiaforrás</h1>

    <?php
        $megujAr = array("EU-átlag"=>20, "Belgium"=>rand(20,25), "Bulgária"=>16, "Dánia"=>30);
        $megujAr["Németország"] = 18;
        echo "<table>";
        echo "<tr><th>Ország</th><th>EU-cél(%)</th></tr>";
        foreach($megujAr as $kulcs => $ertek){
            echo "<tr>";
            echo "<td>$kulcs</td><td>$ertek</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
 
    <a href="index.php">Főoldal</a>

</body>
</html>