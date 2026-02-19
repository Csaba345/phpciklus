<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sytle.css">
    <title>Szelektív gyűjtés</title>
</head>
<body>
    <?php 
        $hulladdekok = ["papír", "konzerv", "teljes_dobóz", "bab_konzerv","sörös_üveg","palack", "krumpi_héja" ]
    
    
    ?>

    
    <form action="kiertekel.php" method="get">
        <label for="kidobando">Kidobando szemét</label>
        <select name="dobas" id="kidobando">
            <?php 
                foreach($hulladdekok as $ertek){
                    echo "<option value=\"$ertek\">$ertek</option>";

                }
            ?>
            
        </select>
        <br><br>
        <input type="image" src="forras/kuka.jpg" alt="kuka" name="mehet">
        
    </form>
</body>
</html>