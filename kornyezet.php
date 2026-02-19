<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Környezet</title>
</head>
<body>
    <?php 
        $fogyasztas= array("A megújuló erőforrások fogyasztása","több, mint amit a természet újratermelni képes",
        "a természet újratermelő kapacitásával azonos mértékű","kevesebb, mint amit a természet újratermelni képes");
        $helyzet= array("A környezet helyzete","a környezet pusztul",
        "környezeti egyensúly","a környezet megújul");
        $fenntarthatosag= array("Fenntarthatóság","nem fenntartható",
        "fenntartható, nem változó állapot","fenntartható fejlődés");
        echo "<table>";
        echo "<tr>
                        <th>".$fogyasztas[0]."</th>
                        <th>".$helyzet[0]."</th>
                        <th>".$fenntarthatosag[0]."</th>
                </tr>";
        for ($index = 1; $index < count($fogyasztas); $index++) 
            {
                echo "<tr>
                        <td>".$fogyasztas[$index]."</td>
                        <td>".$helyzet[$index]."</td>
                        <td>".$fenntarthatosag[$index]."</td>";
                echo    "</tr>";
            }
        echo "</table>";
    ?>
</body>
</html>