<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fogyasztas.css">
    <title>Document</title>
</head>
<body>
    <h1>Fogyasztás, környezet és fenntarthatóság kapcsolata</h1>
    <?php 
        $fogyasztas =  array("A megújuló erőforrások fogyasztása","A környezet helyzete","Fenntarthatóság");
        $kornyezet = array("több, mint amit a természet újratermelni képes", "a környezet pusztul","nem fenntartható");
        $fenntarthato = array("a természet újratermelő kapacitásával azonos mértékű", "környezeti egyensúly", "fenntartható, nem változó állapot");
        $kapcsolat = array("kevesebb, mint amit a természet újratermelni képes", "a környezet megújul", "fenntartható fejlődés");
        for ($i = 0; $i < count($fogyasztas); $i++) {
            echo "<tr>";

        
        echo "<th>".$fogyasztas[$i]."</th>";

        
        echo "<td>".$kornyezet[$i]."</td>";

        
        echo "<td>".$fenntarthato[$i]."</td>";

        
        echo "<td>".$kapcsolat[$i]."</td>";

        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>