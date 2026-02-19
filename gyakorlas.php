<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barátok</title>
</head>
<body>
    <?php 
        $diakok=["Ádám", "Balázs", "Ferenc","Beatrix", "Dávid","Tibor","Ágoston", "Villő","Ákos","Dániel","Márk"];
        $atlagok=[];
        for($i = 1; $i <= 5; $i++) {
            $atlagok[] = rand(1, 5);
            echo $atlagok[$i-1] . "<br>";
        }
        $szinek=["kék", "fekete","fehér", "arany", "piros", "zöld","sárga","szürke",]

    ?>
    <form action="gyaksegít.php">
        <label for="baratok"></label>
    </form>
</body>
</html>