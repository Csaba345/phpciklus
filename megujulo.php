<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="meg.css">
    <title>Megújoló energiafrrás</title>
</head>
<body>
    <h1>Megújoló energiafrrás</h1>
    <?php  
      $meguAr = array("EU-átlag"=>20, "Belgium"=>rand(20, 25), "Bulgária"=>16);  
      $meguAr["Németország"]=18;
      echo "<table>";
      foreach($meguAr as $kulcs=> $ertek){
            echo"<tr>";
            echo "<td>$kulcs</td><td>$ertek</td>";

            echo"</tr>";
      }
      echo "</table>";
    ?>
</body>
</html>